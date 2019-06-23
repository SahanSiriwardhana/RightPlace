<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\District;
use App\City;
use App\Land;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=City::all();
        $district=District::all();
        $landsCount=DB::table('lands')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $housesCount=DB::table('houses')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $apartmentsCount=DB::table('apartments')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $commercialPropertiesCount=DB::table('commercial_properties')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by updated_at DESC,rand()");
        $adsResent=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by updated_at DESC,rand() LIMIT 4");
        return view('buy-properties',['ads'=>$ads,'cities'=>$data,'districts'=>$district,'landCount'=>$landsCount,'housesCount'=>$housesCount,'apartmentsCount'=>$apartmentsCount,'commercialPropertiesCount'=>$commercialPropertiesCount,'resentLands'=>$adsResent,'addCategory'=>'All','priceCategory'=>'All','category'=>'All']);
    }

   
    public function loadProperty($id){
        $data=City::all();
        $district=District::all();
        $landsCount=DB::table('lands')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $housesCount=DB::table('houses')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $apartmentsCount=DB::table('apartments')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $commercialPropertiesCount=DB::table('commercial_properties')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        if($id=='land'){
        $ads=DB::select("SELECT id,title,updated_at,'Land' as 'type',town,city,rent_per_month,image1,add_status,'lands' as tableName from lands WHERE add_status='published' AND type=1");
        }elseif ($id=='house') {
            # code...
         $ads=DB::select("SELECT id,title,updated_at,'House' as 'type',town,city,rent_per_month,image1,add_status,'houses' as tableName from houses WHERE add_status='published' AND type=1");   
        }elseif ($id=='apartment') {
            # code...
            $ads=DB::select("SELECT id,title,updated_at,'Apartment' as 'type',town,city,rent_per_month,image1,add_status,'apartments' as tableName from apartments WHERE add_status='published' AND type=1");   
        
        }elseif ($id=='commercial_property') {
            # code...
            $ads=DB::select("SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1");
        }
        $adsResent=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by updated_at DESC,rand() LIMIT 4");
        return view('buy-properties',['ads'=>$ads,'cities'=>$data,'districts'=>$district,'landCount'=>$landsCount,'housesCount'=>$housesCount,'apartmentsCount'=>$apartmentsCount,'commercialPropertiesCount'=>$commercialPropertiesCount,'resentLands'=>$adsResent,'addCategory'=>$id,'priceCategory'=>$id,'category'=>$id]);
    
       
    }

    public function loadDistrict($id){
        $data=City::all();
        $district=District::all();
        $selctDistrict=DB::table('districts')->select('dname')->where('did', '=', $id)->get();
        
        $landsCount=DB::table('lands')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $housesCount=DB::table('houses')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $apartmentsCount=DB::table('apartments')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $commercialPropertiesCount=DB::table('commercial_properties')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1 AND city=".$id.") union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1 AND city=".$id.") union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1 AND city=".$id.") union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1 AND city=".$id.") union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1 AND city=".$id.") union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1 AND city=".$id.") order by updated_at DESC,rand()");
        $adsResent=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by updated_at DESC,rand() LIMIT 4");
        return view('buy-properties',['ads'=>$ads,'cities'=>$data,'districts'=>$district,'landCount'=>$landsCount,'housesCount'=>$housesCount,'apartmentsCount'=>$apartmentsCount,'commercialPropertiesCount'=>$commercialPropertiesCount,'resentLands'=>$adsResent,'addCategory'=>'All','priceCategory'=>'location','category'=>$id]);
    
        
    }

    public function loadTown($id){
        $data=City::all();
        $district=District::all();
        $selctTown=DB::table('cities')->select('cname')->where('cid', '=', $id)->get();
        $landsCount=DB::table('lands')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $housesCount=DB::table('houses')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $apartmentsCount=DB::table('apartments')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $commercialPropertiesCount=DB::table('commercial_properties')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1 AND town=".$id.") union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1 AND town=".$id.") union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1 AND town=".$id.") union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1 AND town=".$id.") union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1 AND town=".$id.") union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1 AND town=".$id.") order by updated_at DESC,rand()");
        $adsResent=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by updated_at DESC,rand() LIMIT 4");
        return view('buy-properties',['ads'=>$ads,'cities'=>$data,'districts'=>$district,'landCount'=>$landsCount,'housesCount'=>$housesCount,'apartmentsCount'=>$apartmentsCount,'commercialPropertiesCount'=>$commercialPropertiesCount,'resentLands'=>$adsResent,'addCategory'=>'All','priceCategory'=>'location1','category'=>$id]);
    
    }

    public function loadPrice($id){
        $data=City::all();
        $district=District::all();
        $landsCount=DB::table('lands')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $housesCount=DB::table('houses')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $apartmentsCount=DB::table('apartments')->where([['add_status', '=', 'published'],['type','=','1']])->count();
        $commercialPropertiesCount=DB::table('commercial_properties')->where([['add_status', '=', 'published'],['type','=','1']])->count();
       
        if($id=='low2high'){
            $category="Low to High";
            $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by rent_per_month ASC");
        }else{
            $category="High to Low";
            $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by rent_per_month DESC");
        }
        $adsResent=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName from commercial_properties WHERE add_status='published' AND type=1) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses' from houses WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands' from lands WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments' from apartments WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals' from holyday_rentals WHERE add_status='published' AND type=1) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms' from rooms WHERE add_status='published' AND type=1) order by updated_at DESC,rand() LIMIT 4");
        return view('buy-properties',['ads'=>$ads,'cities'=>$data,'districts'=>$district,'landCount'=>$landsCount,'housesCount'=>$housesCount,'apartmentsCount'=>$apartmentsCount,'commercialPropertiesCount'=>$commercialPropertiesCount,'resentLands'=>$adsResent,'addCategory'=>'All','priceCategory'=>$id,'category'=>$category]);
    
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
    }
}
