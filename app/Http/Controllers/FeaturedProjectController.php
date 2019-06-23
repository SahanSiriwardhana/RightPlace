<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use App\FeaturedProject;
use Illuminate\Http\Request;
use File;
use DB;

class FeaturedProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/featured_project');
    }

    public function fetchProject(){
        $projects = DB::table('featured_projects')->get();
        $i=1;
        foreach ($projects as $project){
            
               echo '
                   <div class="col-md-4">
                      
                       
                     <img src="/images/featured_project/'.$project->image.'" class="img-responsive">
                      
                   
                       <button type="button" class="btn btn-danger deleteVideo" data-id="'. $project->id.'" data-token="'. csrf_token() .'">Delete</button>
                     
                
                   </div>'
   ;
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
        //
        $file = Input::file('file');
         if($request->hasFile('file')){
            $success="";
            $error="";
            for($i=0;$i<sizeof($file);$i++){
               
                $imageName[$i] = $file[$i]->getClientOriginalExtension();
               
                    $imageName[$i] = uniqid().'_'.time().'.'.$file[$i]->getClientOriginalExtension();
                    $file[$i]->move(public_path('images/featured_project'), $imageName[$i]);
                    
                    $featuredProject=new FeaturedProject();
                    $featuredProject->user_id="1";
                    $featuredProject->image=$imageName[$i];
                    $featuredProject->save(); 
                    $success="sucess";
                   // $file[$i]->move(public_path('images.image_uplode'), $imageName[$i]);
                
                $output=array(
                    'error'=>$error,
                    'sucess'=>$success,
                );
        
             

            }
            echo json_encode($output);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeaturedProject  $featuredProject
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedProject $featuredProject)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeaturedProject  $featuredProject
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedProject $featuredProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeaturedProject  $featuredProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedProject $featuredProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeaturedProject  $featuredProject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //.DB::table('featured_projects')->where('id', '=', $id) ->pluck('image')
      $imageName= DB::table('featured_projects')
             ->select('image')
             ->where('id','=', $id)
             ->first();
        $filename='images/featured_project/'.$imageName->image;//.DB::table('featured_projects')->where('id', '=', $id) ->pluck('image');
        File::delete($filename);
        FeaturedProject::find($id)->delete();
        return response()->json([
            'success' => 'Record has been deleted successfully!'.$filename
        ]);
    }
}
