<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use DB;
use File;
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
            'ratePerPersonHB'=>'nullable|numeric',
            'ratePerPersonFB'=>'nullable|numeric',
            'rateBB'=>'nullable|numeric',
            'rateHB'=>'nullable|numeric',
            'rateFB'=>'nullable|numeric',
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
            $holydayRental->ratePerPersonHB=$request->ratePerPersonHB;
            $holydayRental->ratePerPersonFB=$request->ratePerPersonFB;
            $holydayRental->rateBB=$request->rateBB;
            $holydayRental->rateHB=$request->rateHB;
            $holydayRental->rateFB=$request->rateFB;
           
            //--------features--------------
            $holydayRental->electricity=$request->electricity;
            $holydayRental->water_supply_from_main_supply=$request->water_supply_from_main_supply;
            $holydayRental->water_supply_from_well=$request->water_supply_from_well;
            $holydayRental->seveage_system=$request->seveage_system;
            $holydayRental->septic_tank=$request->septic_tank;
            //-------optional services
            $holydayRental->free_wifi=$request->free_wifi;
            $holydayRental->free_parking=$request->free_parking;
            $holydayRental->attached_bahroom=$request->attached_bahroom;
            $holydayRental->hot_water=$request->hot_water;
            $holydayRental->ac=$request->ac;
            $holydayRental->private_balcony=$request->private_balcony;
            $holydayRental->beach_natural_view=$request->beach_natural_view;
            $holydayRental->bar=$request->bar;
            $holydayRental->swimming_pool=$request->swimming_pool;
            $holydayRental->fitness_center=$request->fitness_center;
            $holydayRental->outdoor_activities=$request->outdoor_activities;

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
        $district=District::all(); 
        $city=City::all();
        $holydayRental=HolydayRental::find($id);
        $user=User::find($holydayRental->user_id);
       
      
        return view('admin/holiday_short_tearm_edit',['holydayRental'=>$holydayRental,'districts'=>$district,'cities'=>$city,'user'=>$user,'propType'=>'holyday']);
    }

    public function fetchImage(Request $request){
        $id=$request->get('id');
        $datas=DB::table('holyday_rentals')->select('id','image1','image2','image3','image4')->where('id',$id)->get();
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
        $imageName= DB::table('holyday_rentals')
             ->select($colum)
             ->where('id','=', $id)
             ->first();
        
        $filename='images.image_uplode/'.$imageName->$colum;//.DB::table('featured_projects')->where('id', '=', $id) ->pluck('image');
        File::delete($filename);
        $quary= DB::table('holyday_rentals')
            ->where('id', $id)
            ->update([$colum => null]);

            $imageFetch=DB::table('holyday_rentals')
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
            $quary2= DB::table('holyday_rentals')
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

            $imageFetch=DB::table('holyday_rentals')
            ->select('image1','image2','image3','image4')
            ->where('id','=', $id)
            ->first();

            for($i=0;$i<sizeof($file);$i++){
                if($imageFetch->image1==null){
                     //-----------store image----------------
                    $imageName[$i] = $file[$i]->getClientOriginalExtension();
                    $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                    $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                    $quary= DB::table('holyday_rentals')
                    ->where('id', $id)
                    ->update(['image1' => $imageName[$i]]);
                    $success="sucess";
                    //--------------------------------------

                }elseif($imageFetch->image2==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('holyday_rentals')
                     ->where('id', $id)
                     ->update(['image2' => $imageName[$i]]);
                     $success="sucess";
                     //--------------------------------------
                }elseif($imageFetch->image3==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('holyday_rentals')
                     ->where('id', $id)
                     ->update(['image3' => $imageName[$i]]);
                     $success="sucess";
                     //--------------------------------------
                }elseif($imageFetch->image4==null){
                     //-----------store image----------------
                     $imageName[$i] = $file[$i]->getClientOriginalExtension();
                     $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                     $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                     $quary= DB::table('holyday_rentals')
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
            'rentPerMonth'=>'required|numeric',
            'ratePerPersonHB'=>'nullable|numeric',
            'ratePerPersonFB'=>'nullable|numeric',
            'rateBB'=>'nullable|numeric',
            'rateHB'=>'nullable|numeric',
            'rateFB'=>'nullable|numeric',
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
            

            $holydayRental=HolydayRental::find($id);
            $holydayRental->user_id="1";
            $holydayRental->city=$request->city;
            $holydayRental->town=$request->town;
            $holydayRental->title=$request->addTitle;
           
            $holydayRental->negotiable=$request->negotiable;

            $holydayRental->rent_per_month=$request->rentPerMonth;
            $holydayRental->ratePerPersonHB=$request->ratePerPersonHB;
            $holydayRental->ratePerPersonFB=$request->ratePerPersonFB;
            $holydayRental->rateBB=$request->rateBB;
            $holydayRental->rateHB=$request->rateHB;
            $holydayRental->rateFB=$request->rateFB;
           
              //--------features--------------
              $holydayRental->electricity=$request->electricity;
              $holydayRental->water_supply_from_main_supply=$request->water_supply_from_main_supply;
              $holydayRental->water_supply_from_well=$request->water_supply_from_well;
              $holydayRental->seveage_system=$request->seveage_system;
              $holydayRental->septic_tank=$request->septic_tank;
            //-------optional services
            $holydayRental->free_wifi=$request->free_wifi;
            $holydayRental->free_parking=$request->free_parking;
            $holydayRental->attached_bahroom=$request->attached_bahroom;
            $holydayRental->hot_water=$request->hot_water;
            $holydayRental->ac=$request->ac;
            $holydayRental->private_balcony=$request->private_balcony;
            $holydayRental->beach_natural_view=$request->beach_natural_view;
            $holydayRental->bar=$request->bar;
            $holydayRental->swimming_pool=$request->swimming_pool;
            $holydayRental->fitness_center=$request->fitness_center;
            $holydayRental->outdoor_activities=$request->outdoor_activities;


            $holydayRental->address=$request->address;
            $holydayRental->description=$request->detailInfo;
            $holydayRental->phone=$request->phone;

            
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
