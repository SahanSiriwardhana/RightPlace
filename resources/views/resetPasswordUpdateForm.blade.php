<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style2.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Document</title>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
    outline: none;
}

body {
    margin: 0;
    padding: 0;
    background: #DDD;
    font-size: 16px;
    color: #222;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
}

.error {
    color: red;
    font-size: 12px;
}

.help-block {}

.tabTextColor {
    color: rgb(252, 195, 9);
}

#login-box {
    position: relative;
    margin: 5% auto;
    width: 30%;
    height: 100%;
    background: #FFF;
    border-radius: 0px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

h1 {
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
}

input[type="text"],
input[type="password"] {
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 100%;
    height: 42px;
    border: none;
    border-bottom: 1px solid #AAA;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-bottom: 2px solid #16a085;
    color: #16a085;
    transition: 0.2s ease;
}

input[type="submit"] {
    margin-top: 28px;
    width: 120px;
    height: 32px;
    background: #16a085;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.1s ease;
    cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
    opacity: 0.8;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
}

input[type="submit"]:active {
    opacity: 1;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
}

.or {
    position: absolute;
    top: 180px;
    left: 280px;
    width: 40px;
    height: 40px;
    background: #DDD;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    line-height: 40px;
    text-align: center;
}

.left {
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
}

.right {
    position: absolute;
    top: 0;
    right: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
    background: url('https://goo.gl/YbktSj');
    background-size: cover;
    background-position: center;
    border-radius: 0 2px 2px 0;
}

.right .loginwith {
    display: block;
    margin-bottom: 40px;
    font-size: 28px;
    color: #FFF;
    text-align: center;
}

button.social-signin {
    margin-bottom: 20px;
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 4px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    transition: 0.2s ease;
    cursor: pointer;
}

.fa-google {
    background: #dd4b39;
    color: white;
}

.fa-facebook {
    background: #3B5998;
    color: white;
}

button.social-signin:hover,
button.social-signin:focus {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.2s ease;
}

button.social-signin:active {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.2s ease;
}

button.social-signin.facebook {
    background: #32508E;
}

button.social-signin.twitter {
    background: #55ACEE;
}

button.social-signin.google {
    background: #DD4B39;
}
}
</style>
</head>
<body>

    <div id="login-box"> 
            <div class="card ">
                    <div class="card-body ">
                      <p class="card-text" style=" font-family: Verdana,Geneva,sans-serif;   font-size:18px"><b>Reset</b> Password Here</p>
                      <p class="card-text" style=" font-family: Verdana,Geneva,sans-serif;   font-size:14px">Provide 6-10 length password for better security. </p>
                        
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error )
                                    <li>{{$error}}</li>
                                    
                                @endforeach
                            </div>
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}
                            </div>
                        @endif  
                        
                          <form action="{{route('resetpwfromEmail')}}" method="POST" >
                                <div class="form-group" style="padding-top: 5%;padding-bottom: 5%" >
                                        <input class="w3-input w3-border" type="hidden" name="id" value='{{request()->id}}' required>
                                        <input class="w3-input w3-border" type="password" name="newPassword" placeholder='Enter New Password' required>
                                        <input class="w3-input w3-border" type="password" name="confirmPassword" placeholder="Confirm your password" required>
                                </div>
                                <button type="submit" style="margin-left:70% ;width:30%" class="btn btn-primary btn-sm">reset</button>
                                {{csrf_field()}}
                          </form>
                     
                </div>
    </div>
    </div>
    
</body>
</html>