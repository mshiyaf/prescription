<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\Medicine;
use App\Appointment;
use DB;
use Illuminate\Http\Request;

class PrescriptionsController extends Controller
{
    public function store(Request $request){
      $request->validate([

          'medicine_strength' => 'required',
          'medicine_id' => 'required',
          'appointment_id'=>'required',
          'full_dur'=> 'required'

        ]);

        $prescription = new Prescription;
        $prescription->medicine_id = request('medicine_id');
        $prescription->medicine_strength = request('medicine_strength');
        $prescription->appointment_id = request('appointment_id');
        $prescription->dosage_form = request('dosage_form');
        $prescription->duration = request('full_dur');
        $prescription->intake_timing = request('intake_timing');
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
        $med_name = " ";
        $med_strength = " ";
        $form = " ";
        $duration = " ";
        $appointment = Appointment::where('mobile',"=",$mobile)->pluck("id")->all();
        foreach ($appointment as $a) {
          $prescriptions = DB::table('prescriptions')->select("medicine_id","medicine_strength","dosage_form","duration")->where('appointment_id',"=",$a)->get();

          // foreach ($prescriptions as $p) {
          //   $x++;
          //
            // $medicine = Medicine::find($p->medicine_id);
            $medicine = Medicine::all();
          //
          //   $med_name = $medicine->medicine_name;
          //   // dd($med_name);
            $data = view('/get_history', compact('prescriptions'))->render();

            // $med_strength = $med_strength."<br>".$p->medicine_strength;
            // $form = $form."<br>".$p->dosage_form;
            // $duration = $duration."<br>".$p->duration;
            // $med_details = $med_details."<br>".$medicine->medicine_name.$p->medicine_strength.$p->dosage_form.$p->duration;
          // }
        }

        return response()->json(['med_details'=>$data]);
        // return view('get_history',['med_name' = $med_name]);
      }


}
