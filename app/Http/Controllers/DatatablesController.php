<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{

      public function getData(Request $request)
    {

            $columns = array(
              0 => 'package_id',
              1 => 'packagename',
              2 => 'packagetype',
              3 => 'offerprice',
              4 => 'created_at',
              5 => 'updated_at',
              6 => 'action'
            );


            $totalData = Package::count();
            $limit = $request->input('length');
            $start = $request->input('start');
            $order = $columns[$request->input('order.0.column')];
            $dir = $request->input('order.0.dir');

            if(empty($request->input('search.value'))){
              $packages = Package::offset($start)
                                  ->limit($limit)
                                  ->orderBy($order,$dir)
                                  ->get();
              $totalFiltered = Package::count();


            }else{
              $search = $request->input('search.value');
              $packages = Package::where('packagename', 'like', "%{$search}%")
                                   ->orWhere('packagetype','like',"%{$search}%")
                                   ->orWhere('offerprice','like',"%{$search}%")
                                   ->orWhere('created_at','like',"%{$search}%")
                                   ->orWhere('updated_at','like',"%{$search}%")
                                   ->offset($start)
                                   ->limit($limit)
                                   ->orderBy($order, $dir)
                                   ->get();
             $totalFiltered = Package::where('packagename', 'like', "%{$search}%")
                                       ->orWhere('packagetype','like',"%{$search}%")
                                       ->count();

            }
            $data = array();



            if($packages){
                foreach($packages as $r){
        				$nestedData['package_id'] = $r->package_id;
        				$nestedData['packagename'] = $r->packagename;
                $nestedData['packagetype'] = $r->packagetype;
                $nestedData['offerprice'] = $r->offerprice;
        				$nestedData['created_at'] = date('d-m-Y H:i',strtotime($r->created_at));
                $nestedData['updated_at'] = date('d-m-Y H:i',strtotime($r->updated_at));

        				$nestedData['action'] = '
        					<a href="/edit/'.$r->package_id.'" class="btn btn-warning btn-xs">Edit</a>
        					<a href="/delete/'.$r->package_id.'" class="btn btn-danger btn-xs">Delete</a>
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
