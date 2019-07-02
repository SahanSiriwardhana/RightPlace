<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use App\EstateNews;

class EstateNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=EstateNews::all();
        return view('admin/estate-news')->with('news',$data);
    }
    public function index2()
    {
        //
        $data=EstateNews::all();
        return view('real-estate-news')->with('news',$data);
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
            'detailInfo'=>'required',
            'title'=>'required',
           
           
        ]);

        $error_array=array();
        $success="";

        if ($validation->fails()) {
            foreach($validation->messages()->getMessages() as $field_name=>$messages){
                $error_array[]=$messages;
            }
        }else{
            $estateNews=new EstateNews();
            $estateNews->description=$request->detailInfo;
            $estateNews->title=$request->title;
            //get the file name from request
            $file = Input::file('file');
      
            $imageName="";
            if($request->hasFile('file')){
        
                $filename = $file[0]->getClientOriginalName();
                $imageName = uniqid().'_'.time().'.'.$file[0]->getClientOriginalExtension();
                $file[0]->move(public_path('images/news'), $imageName);
            
        }

          
           
           
            if($request->hasFile('file')){
            
            
            $estateNews->image=$imageName;
            
        }
            $estateNews->save(); 
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
        
        $estateNews=EstateNews::find($id);
        return view('estate-news',['news'=>$estateNews]);

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
