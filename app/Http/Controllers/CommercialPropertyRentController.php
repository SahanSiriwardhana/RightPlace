<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use File;
use DB;
use App\CommercialProperty;
use App\District;
use App\City;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class CommercialPropertyRentController extends Controller
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
        return view('admin/commercial')->with('districts',$data);

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
            $commercialProperty->type=2;//rent
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
        $district=District::all(); 
        $city=City::all();
        $commercialProperty=CommercialProperty::find($id);
        $user=User::find($commercialProperty->user_id);
      
        return view('admin/commercial-edit',['commercial'=>$commercialProperty,'districts'=>$district,'cities'=>$city,'user'=>$user,'propType'=>'commercial']);
    }


    public function fetchImage(Request $request){
        $id=$request->get('id');
        $datas=DB::table('commercial_properties')->select('id','image1','image2','image3','image4')->where('id',$id)->get();
        $output="";
        foreach($datas as $data){
        if($data->image1!=null){
            $output.='<div class="col-md-3">
            <img src="/images.image_uplode/'.$data->image1.'" alt="" srcset="" class="img-thumbnail">
            <button type="button" class="btn btn-danger btn-sm deleteImage" data-id="'. $data->id.'" data-token="'. csrf_token() .'" style="margin-top:5px;" name="image1">Delete</button>
        </div>';
        }
        if($data->image2!=null){
            $output.='<div class="col-md-3">
            <img src="/images.image_uplode/'.$data->image2.'" alt="" srcset="" class="img-thumbnail">
            <button type="button" class="btn btn-danger btn-sm deleteImage" data-id="'. $data->id.'" data-token="'. csrf_token() .'" style="margin-top:5px;" name="image2">Delete</button>
        </div>';
        }
        if($data->image3!=null){
            $output.='<div class="col-md-3" >
            <img src="/images.image_uplode/'.$data->image3.'" alt="" srcset="" class="img-thumbnail">
            <button type="button" class="btn btn-danger btn-sm deleteImage" data-id="'. $data->id.'" data-token="'. csrf_token() .'" style="margin-top:5px;" name="image3">Delete</button>
        </div>';
        }
        if($data->image4!=null){
            $output.='<div class="col-md-3" >
            <img src="/images.image_uplode/'.$data->image4.'" alt="" srcset="" class="img-thumbnail">
            <button type="button" class="btn btn-danger btn-sm deleteImage" data-id="'. $data->id.'" data-token="'. csrf_token() .'" style="margin-top:5px;" name="image4">Delete</button>
        </div>';
        }
    }
        echo $output;
    }


    public function destroyImage(Request $request){
        $id= $request->id;
        $colum=$request->name;
        $imageName= DB::table('commercial_properties')
             ->select($colum)
             ->where('id','=', $id)
             ->first();
        
        $filename='images.image_uplode/'.$imageName->$colum;//.DB::table('featured_projects')->where('id', '=', $id) ->pluck('image');
        File::delete($filename);
        $quary= DB::table('commercial_properties')
            ->where('id', $id)
            ->update([$colum => null]);

            $imageFetch=DB::table('commercial_properties')
            ->select('image1','image2','image3','image4')
            ->where('id','=', $id)
            ->first();
            //-----------rearage images----------------
            $image=array($imageFetch->image1,$imageFetch->image2,$imageFetch->image3,$imageFetch->image4);
            rsort( $image );
          
            $updateDetails = [
                'image1' => $image[0],
                'image2' => $image[1],
                'image3' => $image[2],
                'image4' => $image[3],
            ];
            $quary2= DB::table('commercial_properties')
            ->where('id', $id)
            ->update($updateDetails);  
            
            //-----------------------------------------
        echo $quary;
    }


    public function storeUpdateImage(Request $request)
    {
        //

        $file = Input::file('file');
        $id=$request->id;
       
         if($request->hasFile('file')){

            $success="";
            $error="";

            $imageFetch=DB::table('commercial_properties')
            ->select('image1','image2','image3','image4')
            ->where('id','=', $id)
            ->first();

            for($i=0;$i<sizeof($file);$i++){
                if($imageFetch->image1==null){
                     //-----------store image----------------
                    $imageName[$i] = $file[$i]->getClientOriginalExtension();
                    $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                    $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                    $quary= DB::table('commercial_properties')
                    ->where('id', $id)
                    ->update(['image1' => $imageName[$i]]);
                    $success="sucess";
                    //--------------------------------------

                }elseif($imageFetch->image2==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('commercial_properties')
                     ->where('id', $id)
                     ->update(['image2' => $imageName[$i]]);
                     $success="sucess";
                     //--------------------------------------
                }elseif($imageFetch->image3==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('commercial_properties')
                     ->where('id', $id)
                     ->update(['image3' => $imageName[$i]]);
                     $success="sucess";
                     //--------------------------------------
                }elseif($imageFetch->image4==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('commercial_properties')
                     ->where('id', $id)
                     ->update(['image4' => $imageName[$i]]);
                     $success="sucess";
                     //--------------------------------------
                }else{
                    $error="You can only upload 4 images";
                }

              


               
        }
        $output=array(
            'error'=>$error,
            'sucess'=>$success,
        );
            echo json_encode($output);

        }
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
            

            $commercialProperty=CommercialProperty::find($id);
          
            $commercialProperty->city=$request->city;
            $commercialProperty->town=$request->town;
            $commercialProperty->title=$request->addTitle;
          
            $commercialProperty->negotiable=$request->negotiable;
            $commercialProperty->item_type=$request->itemType;
            $commercialProperty->size=$request->size;
               //--------features--------------
               $commercialProperty->electricity=$request->electricity;
               $commercialProperty->water_supply_from_main_supply=$request->water_supply_from_main_supply;
               $commercialProperty->water_supply_from_well=$request->water_supply_from_well;
               $commercialProperty->seveage_system=$request->seveage_system;
               $commercialProperty->septic_tank=$request->septic_tank;
            $commercialProperty->rent_per_month=$request->rentPerMonth;
            $commercialProperty->address=$request->address;
            $commercialProperty->description=$request->detailInfo;
            $commercialProperty->phone=$request->phone;

          
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
