<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello from my ads page</h1>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
    @endif

    <ul class="list">
            <li>Name : {{Auth::user()->first_name}}</li>
            <li>Email : {{Auth::user()->email}}</li>
            <li><a href="{{route('logout')}}">LogOut</a></li>
    </ul>

</body>
</html>