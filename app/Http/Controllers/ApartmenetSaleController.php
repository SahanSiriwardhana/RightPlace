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
            $apartment->user_id="1";
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
