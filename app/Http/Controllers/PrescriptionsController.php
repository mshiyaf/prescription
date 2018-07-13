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
        $appointment = Appointment::where('mobile',"=",$mobile)->pluck("id")->all();
        foreach ($appointment as $a) {
          $prescriptions = Prescription::where('appointment_id',"=",$a)->pluck("medicine_id")->all();
          foreach ($prescriptions as $p) {
            $medicine = Medicine::find($p);
            $data = $data + $medicine->medicine_name;
          }
        }
        $prescriptions = Prescription::where('appointment_id',"=",$id)->pluck("id")->all();
        $medicine = Medicine::all();

        $data = view('/get_history', compact('appointment'))->render();
        $data2 = view('get_prescription_history',compact('prescriptions'))->render();
        return response()->json(['app'=>$data,'pres'=>$data2]);
      }

      // public function get_prescription_history(){
      //   $id = request('id');
      //   $prescriptions = Prescription::where('appointment_id',"=",$id)->pluck("id")->all();
      //   $data = view('/get_prescription_history', compact('prescriptions'))->render();
      //   return response()->json(['options'=>$data]);
      // }
}
