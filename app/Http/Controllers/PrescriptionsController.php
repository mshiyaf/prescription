<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\MedicineGeneric;
use App\MedicineBrand;
use App\PrescriptionDescription;

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
        $prescdesc= new PrescriptionDescription;
        $prescdesc->appointment_id=request('appointment_id');
        $prescdesc->description = request('description');
        $prescdesc->save();



    return response()->json(['success' => true]);
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
          $prescriptions = Prescription::select("evening_qty","afternoon_qty","morning_qty","medicine_brand","medicine_name","medicine_strength","dosage_form","duration","created_at")->where('appointment_id',"=",$a)->get();
          // $details = collect(['med_name', 'med_strength','dosage_form','duration']);
          foreach ($prescriptions as $p) {
            $x++;
            $date = date('d-m-Y',strtotime($p->created_at));
            if($x==1){
            $details = collect([$p->evening_qty,$p->afternoon_qty,$p->morning_qty,$p->medicine_brand,$p->medicine_name,$p->medicine_strength,$p->dosage_form,$p->duration,$date]);
            }
            else
            $details = $details->concat([$p->evening_qty,$p->afternoon_qty,$p->morning_qty,$p->intake_amount,$p->medicine_brand,$p->medicine_name,$p->medicine_strength,$p->dosage_form,$p->duration,$date]);

            $details->all();

          }
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

}
