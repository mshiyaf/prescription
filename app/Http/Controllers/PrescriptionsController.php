<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\Medicine;

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
        $prescription->intake_amount = request('intake_amount');
        $prescription->morning = request('morning');
        $prescription->afternoon = request('afternoon');
        $prescription->evening = request('evening');
        $prescription->custom_timing = request('custom_timing');
        $prescription->description = request('description');
        $prescription->save();


    return response()->json(['success' => true]);
  }



      public function show(){

          $prescription = Prescription::all();
          $medicines = Medicine::all();
          $appointments = Appointment::all();

          return view('welcome', compact('prescription','medicines','appointments'));

      }

      public function get_history(){
        $mobile = request('mobile');
        $id = request('id');
        $x = 0;

        $appointments = Appointment::where('mobile',"=",$mobile)->pluck("id")->all();
        foreach ($appointments as $a) {
          $prescriptions = Prescription::select("intake_amount","medicine_brand","medicine_name","medicine_strength","dosage_form","duration","created_at")->where('appointment_id',"=",$a)->get();
          // $details = collect(['med_name', 'med_strength','dosage_form','duration']);
          foreach ($prescriptions as $p) {
            $x++;
            $date = date('d-m-Y',strtotime($p->created_at));
            if($x==1){
            $details = collect([$p->intake_amount,$p->medicine_brand,$p->medicine_name,$p->medicine_strength,$p->dosage_form,$p->duration,$date]);
            }
            else
            $details = $details->concat([$p->intake_amount,$p->medicine_brand,$p->medicine_name,$p->medicine_strength,$p->dosage_form,$p->duration,$date]);

            $details->all();

          }
        }

        $data = view('/get_history', ['details'=>$details])->render();

        return response()->json(['details'=>$data]);
      }

      public function getMedicineName(){

          $medicine = Medicine::all('medicine_name')->toArray();
          return array_column($medicine, 'medicine_name');

      }

}
