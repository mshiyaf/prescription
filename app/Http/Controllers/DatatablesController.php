<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{

      public function getData(Request $request)
    {

            $columns = array(
              0 => 'staff',
              1 => 'service',
              2 => 'time',
              3 => 'status',
              4 => 'name',
              5 => 'mobile',
              6 => 'email',
              7 => 'address',
              8 => 'description',
              9 => 'action'
            );


            $totalData = Appointment::count();
            $limit = $request->input('length');
            $start = $request->input('start');
            $order = $columns[$request->input('order.0.column')];
            $dir = $request->input('order.0.dir');

            if(empty($request->input('search.value'))){
              $appointments = Appointment::offset($start)
                                  ->limit($limit)
                                  ->orderBy($order,$dir)
                                  ->get();
              $totalFiltered = Appointment::count();


            }else{
              $search = $request->input('search.value');
              $appointments = Appointment::where('staff', 'like', "%{$search}%")
                                   ->orWhere('service','like',"%{$search}%")
                                   ->orWhere('time','like',"%{$search}%")
                                   ->orWhere('status','like',"%{$search}%")
                                   ->orWhere('name','like',"%{$search}%")
                                   ->orWhere('mobile','like',"%{$search}%")
                                   ->orWhere('email','like',"%{$search}%")
                                   ->orWhere('address','like',"%{$search}%")
                                   ->orWhere('description','like',"%{$search}%")
                                   ->offset($start)
                                   ->limit($limit)
                                   ->orderBy($order, $dir)
                                   ->get();
             $totalFiltered = Appointment::where('staff', 'like', "%{$search}%")
                                       ->orWhere('name','like',"%{$search}%")
                                       ->count();

            }
            $data = array();



            if($appointments){
                foreach($appointments as $r){
        				$nestedData['staff'] = $r->staff;
        				$nestedData['service'] = $r->service;
                $nestedData['time'] = $r->time;
                $nestedData['status'] = $r->status;
                $nestedData['name'] = $r->name;
        				$nestedData['mobile'] = $r->mobile;
                $nestedData['email'] = $r->email;
                $nestedData['address'] = $r->address;
                $nestedData['description'] = $r->description;

        				$nestedData['action'] = '
        					<a class="btn btn-primary btn-xs prescription"><i class="fa fa-plus-square"></i> Prescription</a>
        				';
        				$data[] = $nestedData;
        			}
            }

            $json_data = array(
              "draw"			=> intval($request->input('draw')),
              "recordsTotal"	=> intval($totalData),
              "recordsFiltered" => intval($totalFiltered),
              "data"			=> $data
            );

            echo json_encode($json_data);

    }
}
