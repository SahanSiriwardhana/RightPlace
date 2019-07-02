<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use DB;
use App\CommercialProperty;
use App\District;
use App\City;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommercialPropertySaleController extends Controller
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
        return view('admin/commercial-sale')->with('districts',$data);
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

    public function sendEmailWhen3AdsAttempt($data){
        Mail::send(
            'alertMsgAfter3ads',
            ['data'=>$data],
            function($message) use ($data){
                $message->to('rightplaceteam@gmail.com');
                $message->subject("The user has been published more than 3 ads.");
            }
        );
    }
    public function store(Request $request)
    {
        $id= Auth::user()->id;
        $name=Auth::user()->first_name;
        $email=Auth::user()->email;
        $phone=Auth::user()->phone;
        //
        
        $validation = Validator::make($request->all(),[
            'city'=>'required',
            'town'=>'required',
            'addTitle'=>'required|max:50',
            'itemType'=>'required',
            'size'=>'bail|required|numeric',
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

            $commercialProperties =  \DB::table('commercial_properties')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $houses = \DB::table('houses')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $lands =\DB::table('lands')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $apartments =\DB::table('apartments')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $holyday_rentals =\DB::table('holyday_rentals')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $rooms =\DB::table('rooms')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $publishedadcount=$commercialProperties+$houses+$lands+$apartments+$holyday_rentals+$rooms;

            if($publishedadcount>3){
                $data=[
                    'name'=>$name,
                    'email'=>$email,
                    'phone'=>$phone,
                    'addCount'=>$publishedadcount
                ];
                $this->sendEmailWhen3AdsAttempt($data);
                // return  redirect()->back()->with(['successFullySentEmail' =>'Our Agents will contact you soon']);;
            }

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

            $commercialProperty=new CommercialProperty();
            $commercialProperty->user_id=$id;
            $commercialProperty->city=$request->city;
            $commercialProperty->town=$request->town;
            $commercialProperty->title=$request->addTitle;
            $commercialProperty->add_status="pending";
            $commercialProperty->type=1;//sale
            $commercialProperty->negotiable=$request->negotiable;
            $commercialProperty->item_type=$request->itemType;
            //--------features--------------
            $commercialProperty->electricity=$request->electricity;
            $commercialProperty->water_supply_from_main_supply=$request->water_supply_from_main_supply;
            $commercialProperty->water_supply_from_well=$request->water_supply_from_well;
            $commercialProperty->seveage_system=$request->seveage_system;
            $commercialProperty->septic_tank=$request->septic_tank;
            $commercialProperty->size=$request->size;
            $commercialProperty->rent_per_month=$request->rentPerMonth;
            $commercialProperty->address=$request->address;
            $commercialProperty->description=$request->detailInfo;
            $commercialProperty->phone=$request->phone;

            if($request->hasFile('file')){
            for($j=0;$j<sizeof($file);$j++){
            $k=$j+1;
            $commercialProperty->{'image'.$k}=$imageName[$j];
            }
        }
            $commercialProperty->save(); 
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
        $commercialProperty=CommercialProperty::find($id);
        $user=User::find($commercialProperty->user_id);
        $resentCom=DB::table('commercial_properties')->where('add_status', '=', 'published')->orderBy('updated_at', 'desc')->limit(4)->get();
        return view('property-detail-commercial-prop',['land'=>$commercialProperty,'districts'=>$district,'cities'=>$city,'user'=>$user,'resentLands'=>$resentCom]);

    }

    public function approve($id){
        DB::table('commercial_properties')
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
        $commercialProperty=CommercialProperty::find($id);
        $commercialProperty->delete();
        return redirect()->back()->with('success', 'Property has been deleted..!');
    }
}
