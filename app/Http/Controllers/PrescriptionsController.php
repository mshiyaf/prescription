<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\Medicine;
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

  public function getMedicineName(){

      $medicine = Medicine::all('medicine_name')->toArray();
      return array_column($medicine, 'medicine_name');

  }


}
