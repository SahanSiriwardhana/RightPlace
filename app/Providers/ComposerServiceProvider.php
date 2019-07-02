<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        //
        view()->composer(['admin.layout.side-nav','admin.my-account'], function ($view) {
            $id= Auth::user()->id;
            //user count
            $usercount = \DB::table('users')->count();
            $view->usercount = $usercount;

            //published ads count
            $commercialProperties =  \DB::table('commercial_properties')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $houses = \DB::table('houses')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $lands =\DB::table('lands')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $apartments =\DB::table('apartments')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $holyday_rentals =\DB::table('holyday_rentals')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $rooms =\DB::table('rooms')->where([['add_status','=','published'],['user_id','=',$id]])->count();
            $view->publishedadcount=$commercialProperties+$houses+$lands+$apartments+$holyday_rentals+$rooms;


            //pending ads count
            $commercialProperties =  \DB::table('commercial_properties')->where([['add_status','=','pending'],['user_id','=',$id]])->count();
            $houses = \DB::table('houses')->where([['add_status','=','pending'],['user_id','=',$id]])->count();
            $lands =\DB::table('lands')->where([['add_status','=','pending'],['user_id','=',$id]])->count();
            $apartments =\DB::table('apartments')->where([['add_status','=','pending'],['user_id','=',$id]])->count();
            $holyday_rentals =\DB::table('holyday_rentals')->where([['add_status','=','pending'],['user_id','=',$id]])->count();
            $rooms =\DB::table('rooms')->where([['add_status','=','pending'],['user_id','=',$id]])->count();
            $view->pendingadcount=$commercialProperties+$houses+$lands+$apartments+$holyday_rentals+$rooms;

            //count of uploaded home video
            $uploadedVideos =  \DB::table('home_videos')->count();
            $view->uploadedVideoCount= $uploadedVideos;

            //count of featured project
            $featuredProjects =  \DB::table('featured_projects')->count();
            $view->countFeaturedProject= $featuredProjects;

            //countToapproveAds
            $commercialProperties =  \DB::table('commercial_properties')->where([['add_status','=','pending']])->count();
            $houses = \DB::table('houses')->where([['add_status','=','pending']])->count();
            $lands =\DB::table('lands')->where([['add_status','=','pending']])->count();
            $apartments =\DB::table('apartments')->where([['add_status','=','pending']])->count();
            $holyday_rentals =\DB::table('holyday_rentals')->where([['add_status','=','pending']])->count();
            $rooms =\DB::table('rooms')->where([['add_status','=','pending']])->count();
            $view->countToapproveAds=$commercialProperties+$houses+$lands+$apartments+$holyday_rentals+$rooms;
        });
    }
}
