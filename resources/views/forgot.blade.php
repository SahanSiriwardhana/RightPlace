<h1>Hello {{$user->first_name}}</h1>
<p>
    Please Click the password reset button 
<a href="{{url('password/reset/?id='.$code)}}">Reset Password</a>
</p>