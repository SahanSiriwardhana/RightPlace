<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Sentinel;
use Reminder;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
class UserController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function RegisterUser(Request $request){

        $this->validate($request,[
            'name'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'cpassword' => 'required_with:password|same:password|min:6'
        ],
        [
            'name.required' => ' The name field is required.',
        ]
    );
     
        $table = new User();

        $table->first_name = $request->input('name');
        $table->last_name = null;
        $table->city = null;
        $table->phone= null;
        $table->gender=null;
        $table->user_type='user';
        $table->email = $request->input('email');
        $table->password = bcrypt($request->input('password'));

        $table->save();
        
        $credentials = $request->only('email','password');
        
        if (Auth::attempt($credentials)) {
            return redirect('dashboard/add-type')->with('message','Registered successfull');
        }
      
        // return redirect()->route('myAds')->with('message','Registered successfull');
        
    }

//google
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $googleemail = $user->email;
        $name = $user->name;
       

        $user = User::where('email', $googleemail)->first();
        $password='';

        if($user) {
            Auth::loginUsingId($user->id);
        }
       else{
            $table = new User();
            $table->first_name = $name;
            $table->last_name = null;
            $table->city = null;
            $table->phone= null;
            $table->gender=null;
            $table->user_type='user';
            $table->email = $googleemail;
            $table->password = bcrypt($name);
    
            $table->save();
            
            Auth::loginUsingId($table->id);
        }

    
     
        return redirect('dashboard/add-type')->with('message','Registered successfull');

    }

    public function ContactFormSubmit(Request $request){
        $user = $request->all();

        $this->sendEmailFromPopup($user);
        return  redirect()->back()->with(['successFullySentEmail' =>'Our Agents will contact you soon']);;
    }
//Popup form
public function sendEmailFromPopup($user){
    Mail::send(
        'popupMailBody',
        ['user'=>$user],
        function($message) use ($user){
            $message->to('rightplaceteam@gmail.com');
            $message->subject("Requested a advice from ",$user["name"]);
        }
    );
}


//facebook
public function redirectToProviderFacebook()
{
    return Socialite::driver('facebook')->redirect();
}



public function handleProviderCallbackFacebook()
{
    $user = Socialite::driver('facebook')->stateless()->user();
    $fbmail = $user->email;
    $name = $user->name;
   

    $user = User::where('email', $fbmail)->first();
    $password='';

    if($user) {
        Auth::loginUsingId($user->id);
    }
   else{
        $table = new User();
        $table->first_name = $name;
        $table->last_name = null;
        $table->city = null;
        $table->phone= null;
        $table->gender=null;
        $table->user_type='user';
        $table->email = $fbmail;
        $table->password = bcrypt($name);

        $table->save();
        
        Auth::loginUsingId($table->id);
    }


 
    return redirect('dashboard/add-type')->with('message','Registered successfull');

}

    public function LoginUser(Request $request){
        $data = $request->only('email','password');
        if(Auth::attempt($data)){
            return redirect('dashboard/add-type')->with('message','Logged In Successfull');
        }
        return redirect()->back()->with('message','INVALID Login');
    }

    public function ResetPassword(Request $request){
        //$userEmail ="";
        $user = User::whereEmail($request->email)->first();//get user infor
        //if the user exists
        if($user==null){
            //return redirect()->back()->with(['error' =>'Email not Exists']);
            return "No user";
        }
        $this->sendEmail($user,$user->id);
        return  redirect()->back()->with(['success' =>'Please Check your email']);;
    }

    public function showResetForm(){
        return view('resetPasswordUpdateForm');
    }

    public function resetpwfromEmail(Request $request){
        $this->validate($request,[
            'newPassword'=>'required|min:6',
            'confirmPassword' => 'required_with:newPassword|same:newPassword|min:6'
        ]

        );
        $user = User::whereId($request->id)->first();
        $encryptedPW= bcrypt($request->newPassword);
       // return $user;
        DB::update('update users set password = ? where id = ?',[$encryptedPW,$request->id]);
        return redirect()->back()->with('message','password reset successfull');
       
    }

    public function sendEmail($user,$code){
        Mail::send(
            'forgot',
            ['user'=>$user, 'code'=>$code],
            function($message) use ($user){
                
                $message->to($user->email);
                $message->subject("Hello $user->first_name ","Reset your Password");
            }
        );
    }
    

    public function LogOut(){

        Auth::logout();
        Session::flush();


        return redirect('/loginForm')->with('message','Logged Out');
    }

    public function getMyAds(){
        return view('my-ads');
    }

    //Update user Details -----------
    //View update form

    public function myAccount(){
        $id=Auth::user()->id;
        $user=User::find($id);
        return view('admin/my-account',['user'=>$user]);
    }

    //Update User Details through form
    public function updateUserDetails($id,Request $request){
        $first_name = $request->input('first');
        $last_name = $request->input('last');
        $city = $request->input('city');
        $phone = $request->input('phone');
        $gender = $request->input('gender');

        DB::update('update users set first_name = ?,last_name=?,city=?,phone=?,gender=? where id = ?',[$first_name,$last_name,$city,$phone,$gender,$id]);
        //return $request;

        return redirect()->back()->with('message','User details updated successfull');
    }

    //All Users
    

    public function allUsers(){
        // if(!Gate::allows('isAdmin')){
        //     abort(404,'Sorry you cant do this');
        // }
        $users = User::all();
        return view('admin/all-users',['users'=>$users]);
    }

    //Delete Users

    public function deleteUser($id){
        DB::delete('delete from users where id = ?',[$id]);
        return redirect()->back()->with('message','User Deleted successfull');
    }



}
