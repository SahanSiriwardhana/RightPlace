<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CityController extends Controller
{
    //----fetch ddata from table ->cities

    public function fetchCity(Request $request){
        $id=$request->get('district');
        $data=DB::table('cities')->where('did',$id)->get();
        $output="<option value=''>Select Your town</option>";
        foreach($data as $row){
            $output.=" <option value='".$row->cid."'>".$row->cname."</option>";
        }
        echo $output;
    }

}
