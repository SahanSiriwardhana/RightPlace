<?php

namespace App\Http\Controllers;
use App\FeaturedProject;
use Illuminate\Http\Request;
use DB;
use App\District;
use App\City;

class indexController extends Controller
{
    //
   public function index() {
        $district=District::all();
        $city=City::all();
        $featuredProject=FeaturedProject::all();
        $adsResent=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName,type as adType from commercial_properties WHERE add_status='published') union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses',type from houses WHERE add_status='published') union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands',type from lands WHERE add_status='published') union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments',type from apartments WHERE add_status='published') union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals',type from holyday_rentals WHERE add_status='published') union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms',type from rooms WHERE add_status='published') order by updated_at DESC,rand() LIMIT 9");
        return view('index',['featuredProjects'=>$featuredProject,'adsResent'=>$adsResent,'cities'=>$city,'districts'=>$district]);
    }
    
}
