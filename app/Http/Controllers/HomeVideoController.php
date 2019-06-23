<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use App\HomeVideo;
use Illuminate\Http\Request;
use File;
use DB;

class HomeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     
        return view('admin/video-upload');
    }

    public function fetchVideo(){
        $videos = DB::table('home_videos')->get();
        $i=1;
        foreach ($videos as $video){
            
               echo '<div class="title"><h3>Video '.$i.'</h3></div>
               <div class="row" id="">
                   <div class="col-md-12">
                       <div class="col-md-6">
                       
                       <video width="400"  controls>
                               <source src="/video/home_video/'.$video->video.'" type="video/mp4">
                               
                               Your browser does not support HTML5 video.
                       </video>
                   </div>
                   <div class="col-md-6">
                       <button type="button" class="btn btn-danger deleteVideo" data-id="'. $video->id.'" data-token="'. csrf_token() .'">Delete</button>
                     
                   </div>
                   </div>
           </div>';
           $i++;
            }
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
         $file = Input::file('file');
         if($request->hasFile('file')){
            $success="";
            $error="";
            for($i=0;$i<sizeof($file);$i++){
               
                $imageName[$i] = $file[$i]->getClientOriginalExtension();
                if($imageName[$i]='.mp4'){
                    $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                    $file[$i]->move(public_path('video/home_video'), $imageName[$i]);
                    
                    $homeVideo=new HomeVideo();
                    $homeVideo->user_id="1";
                    $homeVideo->video=$imageName[$i];
                    $homeVideo->save(); 
                    $success="sucess";
                   // $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                }else{
                    $error="Please select a mp4 format only";
                    //echo 'Please Select ';
                }
                $output=array(
                    'error'=>$error,
                    'sucess'=>$success,
                );
        
               echo json_encode($output);

            }

        }
        

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function show(HomeVideo $homeVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeVideo $homeVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeVideo $homeVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $imageName= DB::table('home_videos')
        ->select('video')
        ->where('id','=', $id)
        ->first();
   $filename='video/home_video/'.$imageName->video;//.DB::table('featured_projects')->where('id', '=', $id) ->pluck('image');
   File::delete($filename);
        HomeVideo::find($id)->delete();
        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }
}
