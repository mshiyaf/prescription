<?php

namespace App\Http\Controllers;

use App\Prescription;
use Illuminate\Http\Request;

class PrescriptionsController extends Controller
{
    public function store(Request $request){
      $request->validate([

          'medicine_strength' => 'required'
          // 'packagetype' => 'required',
          // 'duration'=>'required',
          // 'totalcost'=> 'required',
          // 'from_date'=>'required',
          // 'to_date'=>'required'
        ]);

        $prescription = new Prescription;
        $prescription->medicine_strength = request('medicine_strength');
        $prescription->appointment_id = request('appointment_id');
        $prescription->save();

        $output = request('output');
    $new = json_decode($output);
    foreach ($new as $key) {
      $prescription = new Prescription;
      $prescription->medicine_strength = $key;
      $prescription->appointment_id = request('appointment_id');
      $prescription->save();
    }

    return response()->json(['success' => true]);
  }

}
