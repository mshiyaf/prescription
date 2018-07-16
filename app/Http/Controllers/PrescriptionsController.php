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
        // $med_details = collect(['med_name', 'med_strength','dosage_form','duration']);
        // $med_name = " ";
        // $med_strength = " ";
        // $form = " ";
        // $duration = " ";
        $appointment = Appointment::where('mobile',"=",$mobile)->pluck("id")->all();
        foreach ($appointment as $a) {
          $prescriptions = Prescription::select("medicine_id","medicine_strength","dosage_form","duration")->where('appointment_id',"=",$a)->get();
          // $details = collect(['med_name', 'med_strength','dosage_form','duration']);
          foreach ($prescriptions as $p) {
            $x++;

            $medicine = Medicine::find($p->medicine_id);
            // $medicine = Medicine::all();
          //
            // $med_name = $med_name."<br>".$medicine->medicine_name;
            // // $data = view('/get_history', compact('prescriptions'))->render();
            //
            // $med_strength = $med_strength."<br>".$p->medicine_strength;
            // $form = $form."<br>".$p->dosage_form;
            // $duration = $duration."<br>".$p->duration;
            if($x==1){
            $details = collect([$medicine->medicine_name,$p->medicine_strength,$p->dosage_form,$p->duration]);
            }
            else
            $details = $details->concat([$medicine->medicine_name,$p->medicine_strength,$p->dosage_form,$p->duration]);
            // $med_details = $med_details->concat($med);
             // $details = $details->concat(['med_name'=>$medicine->medicine_name,'med_strength'=>$p->medicine_strength,'dosage_form'=>$p->dosage_form,'duration'=>$p->duration]);
            // }
            $details->all();
            // $med_details = $med_details."<br>".$medicine->medicine_name."<br>".$p->medicine_strength."<br>".$p->dosage_form."<br>".$p->duration."<br>";
          }
        }

        //return response()->json(['med_details'=>$details,'count'=>$x]);
        $data = view('/get_history', ['med_details'=>$details]->render());

        return response()->json(['details'=>$data]);
      }


}
