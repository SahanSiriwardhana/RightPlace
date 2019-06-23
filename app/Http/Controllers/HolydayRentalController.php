<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use DB;
use App\HolydayRental;
use App\District;
use App\City;
use App\User;

class HolydayRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $district=new District();
        $data=District::all(); 
        return view('admin/holiday_short_tearm')->with('districts',$data);
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
        //
        $validation = Validator::make($request->all(),[
            'city'=>'required',
            'town'=>'required',
            'addTitle'=>'required|max:50',
            'rentPerMonth'=>'required|numeric',
            'detailInfo'=>'required|max:5000',
            'phone'=>'required|numeric|regex:/^[0-9]{10}$/',
           
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

            $holydayRental=new HolydayRental();
            $holydayRental->user_id="1";
            $holydayRental->city=$request->city;
            $holydayRental->town=$request->town;
            $holydayRental->title=$request->addTitle;
            $holydayRental->add_status="pending";
            $holydayRental->type=2;//rent
            $holydayRental->negotiable=$request->negotiable;
            $holydayRental->rent_per_month=$request->rentPerMonth;

            //-------optional services
            $holydayRental->air_condition=$request->air_condition;
            $holydayRental->alarm_system=$request->alarm_system;
            $holydayRental->doorman=$request->doorman;
            $holydayRental->fireplace=$request->fire_place;
            $holydayRental->garden=$request->garden;
            $holydayRental->heating_system=$request->heaing_system;
            $holydayRental->high_ceiling=$request->high_ceiling;
            $holydayRental->car_parking=$request->car_park;

            $holydayRental->address=$request->address;
            $holydayRental->description=$request->detailInfo;
            $holydayRental->phone=$request->phone;

            if($request->hasFile('file')){
            for($j=0;$j<sizeof($file);$j++){
            $k=$j+1;
            $holydayRental->{'image'.$k}=$imageName[$j];
            }
        }
            $holydayRental->save(); 
            $success="sucess";
        }
        $output=array(
            'error'=>$error_array,
            'sucess'=>$success,
        );

       echo json_encode($output);
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
        $holydayRental=HolydayRental::find($id);
        $user=User::find($holydayRental->user_id);
        $resentHolyday=DB::table('holyday_rentals')->where('add_status', '=', 'published')->orderBy('updated_at', 'desc')->limit(4)->get();
        return view('property-detail-holyday',['land'=>$holydayRental,'districts'=>$district,'cities'=>$city,'user'=>$user,'resentLands'=>$resentHolyday]);

    }

    public function approve($id){
        DB::table('holyday_rentals')
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
        $holydayRental=HolydayRental::find($id);
        $holydayRental->delete();
        return redirect()->back();
    }
}
