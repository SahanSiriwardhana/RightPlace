<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use DB;
use App\Apartment;
use App\District;
use App\City;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class ApartmenetSaleController extends Controller
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
        return view('admin/apartment-sale')->with('districts',$data);
      
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $id= Auth::user()->id;
        $name=Auth::user()->first_name;
        $email=Auth::user()->email;
        $phone=Auth::user()->phone;
        $validation = Validator::make($request->all(),[
            'city'=>'required',
            'town'=>'required',
            'addTitle'=>'required|max:50',
            'itemType'=>'required',
            'beds'=>'required',
            'baths'=>'required',
            'houseSize'=>'bail|required|numeric',
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

            $apartment=new Apartment();
            $apartment->user_id=$id;
            $apartment->city=$request->city;
            $apartment->town=$request->town;
            $apartment->title=$request->addTitle;
            $apartment->add_status="pending";
            $apartment->type=1;//sale
            $apartment->negotiable=$request->negotiable;
           
            $apartment->house_size=$request->houseSize;
            $apartment->item_type=$request->itemType;
               //--------features--------------
               $apartment->electricity=$request->electricity;
               $apartment->water_supply_from_main_supply=$request->water_supply_from_main_supply;
               $apartment->water_supply_from_well=$request->water_supply_from_well;
               $apartment->seveage_system=$request->seveage_system;
               $apartment->septic_tank=$request->septic_tank;


            $apartment->beds=$request->beds;
            $apartment->baths=$request->baths;
            
            
            $apartment->rent_per_month=$request->rentPerMonth;
            $apartment->address=$request->address;
            $apartment->description=$request->detailInfo;
            $apartment->phone=$request->phone;

            if($request->hasFile('file')){
            for($j=0;$j<sizeof($file);$j++){
            $k=$j+1;
            $apartment->{'image'.$k}=$imageName[$j];
            }
        }
            $apartment->save(); 
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
    public function show($id){
        //
        $district=District::all(); 
        $city=City::all();
        $apartment=Apartment::find($id);
        $user=User::find($apartment->user_id);
        $resentApartment=DB::table('apartments')->where('add_status', '=', 'published')->orderBy('updated_at', 'desc')->limit(4)->get();
        return view('property-detail-apartment',['land'=>$apartment,'districts'=>$district,'cities'=>$city,'user'=>$user,'resentLands'=>$resentApartment]);

    }

    public function approve($id){
        DB::table('apartments')
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
        $apartment=Apartment::find($id);
        $apartment->delete();
        return redirect()->back()->with('success', 'Property has been deleted..!');
    }
}
