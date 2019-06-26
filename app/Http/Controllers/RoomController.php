<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use DB;
use File;
use App\Room;
use App\District;
use App\City;
use App\User;

class RoomController extends Controller
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
        return view('admin/portion_rooms')->with('districts',$data);
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
            'itemType'=>'required',
            'gender'=>'required',
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

            $room=new Room();
            $room->user_id="1";
            $room->city=$request->city;
            $room->town=$request->town;
            $room->title=$request->addTitle;
            $room->add_status="pending";
            $room->type=2;//rent
            $room->negotiable=$request->negotiable;
            $room->rent_per_month=$request->rentPerMonth;
            $room->item_type=$request->itemType;
            $room->gender=$request->gender;
            //-------optional services
            $room->air_condition=$request->air_condition;
            $room->alarm_system=$request->alarm_system;
            $room->doorman=$request->doorman;
            $room->fireplace=$request->fire_place;
            $room->garden=$request->garden;
            $room->heating_system=$request->heaing_system;
            $room->high_ceiling=$request->high_ceiling;
            $room->car_parking=$request->car_park;

            $room->address=$request->address;
            $room->description=$request->detailInfo;
            $room->phone=$request->phone;

            if($request->hasFile('file')){
            for($j=0;$j<sizeof($file);$j++){
            $k=$j+1;
            $room->{'image'.$k}=$imageName[$j];
            }
        }
            $room->save(); 
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
        $room=Room::find($id);
        $user=User::find($room->user_id);
        $resentRoom=DB::table('rooms')->where('add_status', '=', 'published')->orderBy('updated_at', 'desc')->limit(4)->get();
        return view('property-detail-room',['land'=>$room,'districts'=>$district,'cities'=>$city,'user'=>$user,'resentLands'=>$resentRoom]);

    }

    public function approve($id){
        DB::table('rooms')
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
        $district=District::all(); 
        $city=City::all();
        $room=Room::find($id);
        $user=User::find($room->user_id);
        return view('admin/portion_rooms_edit',['room'=>$room,'districts'=>$district,'cities'=>$city,'user'=>$user,'propType'=>'room']);
    }

    public function fetchImage(Request $request){
        $id=$request->get('id');
        $datas=DB::table('rooms')->select('id','image1','image2','image3','image4')->where('id',$id)->get();
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
        $imageName= DB::table('rooms')
             ->select($colum)
             ->where('id','=', $id)
             ->first();
        
        $filename='images.image_uplode/'.$imageName->$colum;//.DB::table('featured_projects')->where('id', '=', $id) ->pluck('image');
        File::delete($filename);
        $quary= DB::table('rooms')
            ->where('id', $id)
            ->update([$colum => null]);

            $imageFetch=DB::table('rooms')
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
            $quary2= DB::table('rooms')
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

            $imageFetch=DB::table('rooms')
            ->select('image1','image2','image3','image4')
            ->where('id','=', $id)
            ->first();

            for($i=0;$i<sizeof($file);$i++){
                if($imageFetch->image1==null){
                     //-----------store image----------------
                    $imageName[$i] = $file[$i]->getClientOriginalExtension();
                    $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                    $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                    $quary= DB::table('rooms')
                    ->where('id', $id)
                    ->update(['image1' => $imageName[$i]]);
                    $success="sucess";
                    //--------------------------------------

                }elseif($imageFetch->image2==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('rooms')
                     ->where('id', $id)
                     ->update(['image2' => $imageName[$i]]);
                     $success="sucess";
                     //--------------------------------------
                }elseif($imageFetch->image3==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('rooms')
                     ->where('id', $id)
                     ->update(['image3' => $imageName[$i]]);
                     $success="sucess";
                     //--------------------------------------
                }elseif($imageFetch->image4==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('rooms')
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
            'gender'=>'required',
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
           

            $room=Room::find($id);
            
            $room->city=$request->city;
            $room->town=$request->town;
            $room->title=$request->addTitle;
            
            $room->negotiable=$request->negotiable;
            $room->rent_per_month=$request->rentPerMonth;
            $room->item_type=$request->itemType;
            $room->gender=$request->gender;
            //-------optional services
            $room->air_condition=$request->air_condition;
            $room->alarm_system=$request->alarm_system;
            $room->doorman=$request->doorman;
            $room->fireplace=$request->fire_place;
            $room->garden=$request->garden;
            $room->heating_system=$request->heaing_system;
            $room->high_ceiling=$request->high_ceiling;
            $room->car_parking=$request->car_park;

            $room->address=$request->address;
            $room->description=$request->detailInfo;
            $room->phone=$request->phone;

           
            $room->save(); 
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
        $room=Room::find($id);
        $room->delete();
        return redirect()->back()->with('success', 'Property has been deleted..!');
    }
}
