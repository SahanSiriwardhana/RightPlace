<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use DB;
use App\Land;
use App\District;
use App\City;
use App\User;
use App\House;

class LandSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $data=District::all(); 
       return view('admin/land-sale')->with('districts',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validation = Validator::make($request->all(),[
            'city'=>'required',
            'town'=>'required',
            'addTitle'=>'required|max:50',
            'itemType'=>'required',
            'landSize'=>'bail|required|numeric',
            'unit'=>'required',
            'rentPerMonth'=>'required|numeric',
            'detailInfo'=>'required|max:5000',
            'phone'=>'required|numeric|regex:/^[0-9]{10}$/',
            'file[0]'=>'image|max:2048',
        ]);

        $error_array=array();
        $success="";

        if ($validation->fails()) {
            foreach($validation->messages()->getMessages() as $field_name=>$messages){
                $error_array[]=$messages;
            }
        }else{
            //get the file name from request
            $file = Input::file('file');
           // $destinationPath = public_path() . '/image_uplode/';
            $imageName=[];
            if($request->hasFile('file')){
            for($i=0;$i<sizeof($file);$i++){
                $filename = $file[$i]->getClientOriginalName();
                $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
            }
        }

            $land=new Land();
            $land->user_id="1";
            $land->city=$request->city;
            $land->town=$request->town;
            $land->title=$request->addTitle;
            $land->add_status="pending";
            $land->type=1;//sale
            $land->negotiable=$request->negotiable;
            $land->item_type=$request->itemType;
            $land->land_size=$request->landSize;
            $land->land_size_type=$request->unit;
                //--------features--------------
                $land->electricity=$request->electricity;
                $land->water_supply_from_main_supply=$request->water_supply_from_main_supply;
                $land->water_supply_from_well=$request->water_supply_from_well;
                $land->seveage_system=$request->seveage_system;
                $land->septic_tank=$request->septic_tank;
            $land->rent_per_month=$request->rentPerMonth;
            $land->address=$request->address;
            $land->description=$request->detailInfo;
            $land->phone=$request->phone;

            if($request->hasFile('file')){
            for($j=0;$j<sizeof($file);$j++){
            $k=$j+1;
            $land->{'image'.$k}=$imageName[$j];
            }
        }
            $land->save(); 
            $success="sucess";
        }
        $output=array(
            'error'=>$error_array,
            'sucess'=>$success,
        );

       echo json_encode($output);
       // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $district=District::all(); 
        $city=City::all();
        $land=Land::find($id);
        $user=User::find($land->user_id);
        $resentLand=DB::table('lands')->where('add_status', '=', 'published')->orderBy('updated_at', 'desc')->limit(4)->get();
        return view('property-detail',['land'=>$land,'districts'=>$district,'cities'=>$city,'user'=>$user,'resentLands'=>$resentLand]);

    }

    public function approve($id){
        DB::table('lands')
            ->where('id', $id)
            ->update(['add_status' => 'published']);
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $house=Land::find($id);
        $house->delete();
        return redirect()->back()->with('success', 'Property has been deleted..!');
    }
}
