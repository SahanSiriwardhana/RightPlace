<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\City;
class ShowAddController extends Controller
{
    //

    public function publishAds(){
        $id= Auth::user()->id;
        $data=City::all(); 
        $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,city,rent_per_month,image1,add_status,'commercial_properties' as tableName,type as adType  from commercial_properties WHERE add_status='published' AND user_id=$id) union (select id,title,updated_at,'House',town,city,rent_per_month,image1,add_status,'houses',type from houses WHERE add_status='published' AND user_id=$id ) union (select id,title,updated_at,'Land',town,city,rent_per_month,image1,add_status,'lands',type from lands WHERE add_status='published' AND user_id=$id ) union (select id,title,updated_at,'Apartment',town,city,rent_per_month,image1,add_status,'apartments',type from apartments WHERE add_status='published' AND user_id=$id ) union (select id,title,updated_at,'Holyday Rental',town,city,rent_per_month,image1,add_status,'holyday_rentals',type from holyday_rentals WHERE add_status='published' AND user_id=$id ) union (select id,title,updated_at,'Room',town,city,rent_per_month,image1,add_status,'rooms',type from rooms WHERE add_status='published' AND user_id=$id ) order by updated_at DESC,rand()");
        return view('admin/my-add',['ads'=>$ads,'cities'=>$data,'status'=>'Publish Ads']);
    }

    public function pendingAds(){//----fuction to show own pending add to user
        $id= Auth::user()->id;
        $data=City::all(); 
        $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,rent_per_month,image1,add_status,'commercial_properties' as tableName,type as adType from commercial_properties WHERE user_id=$id AND add_status='pending') union (select id,title,updated_at,'House',town,rent_per_month,image1,add_status,'houses',type from houses WHERE user_id=$id AND add_status='pending') union (select id,title,updated_at,'Land',town,rent_per_month,image1,add_status,'lands',type from lands WHERE user_id=$id AND add_status='pending') union (select id,title,updated_at,'Apartment',town,rent_per_month,image1,add_status,'apartment',type from apartments WHERE user_id=$id AND add_status='pending') union (select id,title,updated_at,'Holyday Rental',town,rent_per_month,image1,add_status,'holyday_rentals',type from holyday_rentals WHERE user_id=$id AND add_status='pending') union (select id,title,updated_at,'Room',town,rent_per_month,image1,add_status,'rooms',type from rooms WHERE user_id=$id AND add_status='pending') order by updated_at DESC,rand()");
        return view('admin/my-add',['ads'=>$ads,'cities'=>$data,'status'=>'Pending Ads']);
    }

    public function canceledAds(){

        return view('admin/portion_rooms');
    }
    public function approveAd(){//---function for admin to approve pending adds
        $id= Auth::user()->id;
        $data=City::all(); 
        $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,rent_per_month,image1,add_status,'commercial_properties' as tableName,type as adType from commercial_properties WHERE add_status='pending') union (select id,title,updated_at,'House',town,rent_per_month,image1,add_status,'houses',type from houses WHERE add_status='pending') union (select id,title,updated_at,'Land',town,rent_per_month,image1,add_status,'lands',type from lands WHERE add_status='pending') union (select id,title,updated_at,'Apartment',town,rent_per_month,image1,add_status,'apartments',type from apartments WHERE add_status='pending') union (select id,title,updated_at,'Holyday Rental',town,rent_per_month,image1,add_status,'holyday_rentals',type from holyday_rentals WHERE add_status='pending') union (select id,title,updated_at,'Room',town,rent_per_month,image1,add_status,'rooms',type from rooms WHERE add_status='pending') order by updated_at DESC,rand()");
        return view('admin/my-add',['ads'=>$ads,'cities'=>$data,'status'=>'Pending Ads List']);
    }

    public function my_add(){
        $id= Auth::user()->id;
        $data=City::all(); 
        $ads=DB::select("(SELECT id,title,updated_at,'Commercial Properties' as 'type',town,rent_per_month,image1,add_status,'commercial_properties' as tableName,type as adType from commercial_properties WHERE user_id=$id) union (select id,title,updated_at,'House',town,rent_per_month,image1,add_status,'houses',type from houses WHERE user_id=$id) union (select id,title,updated_at,'Land',town,rent_per_month,image1,add_status,'lands',type from lands WHERE user_id=$id) union (select id,title,updated_at,'Apartment',town,rent_per_month,image1,add_status,'apartments',type from apartments WHERE user_id=$id) union (select id,title,updated_at,'Holyday Rental',town,rent_per_month,image1,add_status,'holyday_rentals',type from holyday_rentals WHERE user_id=$id) union (select id,title,updated_at,'Room',town,rent_per_month,image1,add_status,'rooms',type from rooms WHERE user_id=$id) order by updated_at DESC");
        return view('admin/my-add',['ads'=>$ads,'cities'=>$data,'status'=>'All Ads']);
    }


}
