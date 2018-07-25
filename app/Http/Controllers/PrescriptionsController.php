<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\MedicineGeneric;
use App\MedicineBrand;
use App\PrescriptionDescription;
use DB;
use App\Appointment;

use Illuminate\Http\Request;


class PrescriptionsController extends Controller
{
    public function store(Request $request){
      $request->validate([

          // 'medicine_strength' => 'required',
          // // 'medicine_id' => 'required',
          // 'appointment_id'=>'required',
          // 'full_dur'=> 'required'

        ]);

        $prescription = new Prescription;
        $prescription->medicine_name = request('medicine_name');
        $prescription->medicine_brand = request('medicine_brand');
        $prescription->medicine_strength = request('medicine_strength');
        $prescription->appointment_id = request('appointment_id');
        $prescription->dosage_form = request('dosage_form');
        $prescription->duration = request('full_dur');
        $prescription->intake_timing = request('intake_timing');
        $prescription->morning = request('morning');
        $prescription->morning_qty = request('morning_qty');
        $prescription->afternoon = request('afternoon');
        $prescription->afternoon_qty = request('afternoon_qty');
        $prescription->evening = request('evening');
        $prescription->evening_qty = request('evening_qty');
        $prescription->custom_timing = request('custom_timing');
        $prescription->save();



    return response()->json(['success' => true]);
    }


    public function store_desc(Request $request){

      $prescdesc= new PrescriptionDescription;
      $prescdesc->appointment_id=request('appointment_id');
      $prescdesc->description = request('description');
      // dd($prescdesc->description);
      $prescdesc->save();

    }




      public function show(){

          $prescription = Prescription::all();
          $appointments = Appointment::all();

          return view('welcome', compact('prescription','appointments'));

      }

      public function get_history(){
        $mobile = request('mobile');
        $id = request('id');
        $x = 0;

        $appointments = Appointment::where('mobile',"=",$mobile)->pluck("id")->all();
        foreach ($appointments as $a) {
          //$prescriptions = Prescription::select("evening_qty","afternoon_qty","morning_qty","medicine_brand","medicine_name","medicine_strength","dosage_form","duration","created_at")->where('appointment_id',"=",$a)->get();
          $prescriptions = DB::table('prescriptions')
          ->select("evening_qty","afternoon_qty","morning_qty","medicine_brand","medicine_name","medicine_strength","dosage_form","duration","created_at")
          ->where('appointment_id',"=",$a)->get();

          $details[$x]=$prescriptions;
          $x++;

        }

        $data = view('/get_history', ['details'=>$details])->render();

        return response()->json(['details'=>$data]);
      }

      public function getMedicineName(){

          $medicine = MedicineGeneric::all('medicine_name')->toArray();
          return array_column($medicine, 'medicine_name');

      }

      public function getMedicineBrand(){

          $medicine = MedicineBrand::all('brand_name')->toArray();
          return array_column($medicine, 'brand_name');

      }


      public function getMedicineBrandOnName(){
        $medicine_name = request('medicine_name');
        $id = MedicineGeneric::where('medicine_name',$medicine_name)->pluck('id');
        $medicine_brand = MedicineBrand::where('generic_id',$id)->get()->toArray();
        // dd($medicine_brand);
        return array_column($medicine_brand, 'brand_name');
      }

      public function getMedicineNameOnBrand(){
        $medicine_brand = request('medicine_brand');
        $generic_id = MedicineBrand::where('brand_name',$medicine_brand)->pluck('generic_id');
        $medicine_name = MedicineGeneric::where('id',$generic_id)->pluck('medicine_name');
        // dd($medicine_brand);
        // return array_column($medicine_name, 'medicine_name');
        return response()->json(['med_name' => $medicine_name]);
      }
}
