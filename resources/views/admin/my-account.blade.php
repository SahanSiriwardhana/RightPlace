



@extends('admin.layout.main-nav')
@section('content')

    <!--End Main Header -->
    
    <!-- Hidden Bar -->
   
    <!--End Hidden Bar -->

    <div class="dashboard">
	    <div class="container-fluid">
			
	        <div class="content-area">
				
	            <div class="dashboard-content">
						
	                <div class="dashboard-header clearfix">
	                    <div class="row">
									
	                    </div>
	                </div>
					<div class="row">
								
					<div class="col-lg-3">
							@component('admin.layout.side-nav')
								
							@endcomponent
					</div>
	                    <div class="column col-lg-9">
							
                            
<div class="container">
    
    <div class="row square">
        <div class="col-md-10 user-details">
            <div class="row coralbg white">
                <div class="col-md-8 no-pad">
                    <div class="user-pad">
                    <h3 class="white" style="padding-top: 2%"><strong>Welcome, {{Auth::user()->first_name}} </strong></h3>
                    <h4 class="white" style="margin-top: 2%"><i class="far fa-address-card"></i>{{Auth::user()->city ?Auth::user()->city:'Update your address!'}}</h4>
                        <h4 class="white"><i class="fa fa-envelope"></i> {{Auth::user()->email}} </h4>
                            <button type="button" style="margin-top: 2%" class="btn btn-labeled btn-info" data-toggle="collapse" href="#collapseExample" href="#">
                                <span class="btn-label"><i class="fas fa-user-edit"></i></span>Update</button>
                    </div>
                </div>
                <div class="col-md-4 " style="padding-top: 2%;padding-bottom: 2%">
                    <div class="user-image">
                        <img src="images/profile.png" class=" img-responsive img-thumbnail img-circle" style="width: 125px;height:125px">
                    </div>
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card">
                        <form class="w3-container w3-card-4"  method="post" action="/update-userDetails/{{$user->id}}">
                            <h2 class="w3-text-black"  style="margin-top:2%">Edit User Details</h2>
                            <p>      
                            <label class="w3-text-blue"><b>First Name</b></label>
                            <input class="w3-input w3-border" name="first" type="text" value="{{$user->first_name}}"></p>
                            <p>      
                            <label class="w3-text-blue"><b>Last Name</b></label>
                            <input class="w3-input w3-border" name="last" value="{{$user->last_name}}" type="text"></p>

                            <p>      
                                    <label class="w3-text-blue"><b>City</b></label>
                                    <input class="w3-input w3-border" name="city" value="{{$user->city}}" type="text"></p>

                            <p>      
                                    <label class="w3-text-blue"><b>Phone</b></label>
                                    <input class="w3-input w3-border" name="phone"  value="{{$user->phone}}" type="text"></p>
                            <p>      
                            <p>
                                    <label class="w3-text-blue"><b>Gender</b></label><br>
                                    
                                    <input class="w3-radio" type="radio" name="gender"
                                     value="1" checked>
                                    <label>Male</label>
                                    
                                    <input class="w3-radio" type="radio" name="gender" value="0">
                                    <label>Female</label>

                            </p></p>
                            <div class="buttonrow pull-right"  style="margin-bottom:2%">
                            {{-- <button class="w3-btn w3-blue">Reset Password</button> --}}
                            <button type="submit" class="w3-btn w3-blue">Update</button></p>
                            </div>
                            {{ csrf_field() }}
                        </form>    
                </div>
            </div>
            <div class="row overview">
                   
                <div class="col-md-6 user-pad text-center">
                    <h3>MY PUBLISHED ADS</h3>
                <h4 class="adnumb">{{$publishedadcount}}</h4>
                    <button class="w3-button  w3-blue w3-hover-black">Manage My Published Ads</button>
                </div>
                
                <div class="col-md-6 user-pad text-center">
                    <h3>MY PENDING ADS</h3>
                    <h4>{{$pendingadcount}}</h4>
                    <button class="w3-button w3-blue w3-hover-black">Manage My Pending Ads</button>
                </div>
                
            </div>
        </div>

      
    </div>
</div>
	                    </div>
	                </div>
	            </div>
				
				<p class="copyright-text">© 2019 <a href="/">RightPlace.lk | </a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>
    
@endsection


<!------ Include the above in your HEAD tag ---------->
<style>
        .square, .btn {
        border-radius: 0px!important;
    }
    
    /* -- color classes -- */
    .coralbg {
        background-color: #2b3263;
    } 
    
    .coral {
        color: #FA396f;
    }
    
    .turqbg {
        background-color: #46D8D2;
    }
    
    .turq {
        color: #46D8D2;
    }
    
    .white {
        color: #fff!important;
    }
    
    /* -- The "User's Menu Container" specific elements. Custom container for the snippet -- */
    div.user-menu-container {
      z-index: 10;
      background-color: #fff;
      margin-top: 20px;
      background-clip: padding-box;
      opacity: 0.97;
      filter: alpha(opacity=97);
      -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
      box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }
    
    div.user-menu-container .btn-lg {
        padding: 0px ;
    }
    
    div.user-menu-container h4 {
        font-weight: 300;
        color: #8b8b8b;
    }
    
    div.user-menu-container a, div.user-menu-container .btn  {
        transition: 1s ease;
    }
    
    div.user-menu-container .thumbnail {
       width:100%;
       min-height:200px;
       border: 0px!important;
       padding: 0px;
       border-radius: 0;
       border: 0px!important;
    }
    
    /* -- Vertical Button Group -- */
    div.user-menu-container .btn-group-vertical {
        display: block;
    }
    
    div.user-menu-container .btn-group-vertical>a {
        padding: 20px 25px;
        background-color: #46D8D2;
        color: white;
        border-color: #fff;
    }
    
    div.btn-group-vertical>a:hover {
        color: white;
        border-color: white;
    }
    
    div.btn-group-vertical>a.active {
        background: #FA396F;
        box-shadow: none;
        color: white;
    }
    /* -- Individual button styles of vertical btn group -- */
    div.user-menu-btns {
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }
    
    div.user-menu-btns div.btn-group-vertical>a.active:after{
      content: '';
      position: absolute;
      left: 100%;
      top: 50%;
      margin-top: -13px;
      border-left: 0;
      border-bottom: 13px solid transparent;
      border-top: 13px solid transparent;
      border-left: 10px solid #46D8D2;
    }
    /* -- The main tab & content styling of the vertical buttons info-- */
    div.user-menu-content {
        color: #323232;
    }
    
    ul.user-menu-list {
        list-style: none;
        margin-top: 20px;
        margin-bottom: 0;
        padding: 10px;
        border: 1px solid #eee;
    }
    ul.user-menu-list>li {
        padding-bottom: 8px;
        text-align: center;
    }
    
    div.user-menu div.user-menu-content:not(.active){
      display: none;
    }
    
    /* -- The btn stylings for the btn icons -- */
    .btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
    .btn-labeled {padding-top: 0;padding-bottom: 0;}
    
    /* -- Custom classes for the snippet, won't effect any existing bootstrap classes of your site, but can be reused. -- */
    
    .user-pad {
        padding: 5px 25px;
    }
    
    .no-pad {
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }
    
    .user-details {
        background: #eee;
        min-height: 333px;
    }
    
    .user-image {
      max-height:200px;
      overflow:hidden;
    }
    
    .overview h3 {
        font-weight: 300;
        margin-top: 15px;
        margin: 10px 0 0 0;
    }
    
    .overview h4 {
        font-weight: bold!important;
        font-size: 40px;
        margin-top: 0;
    }
    
    .view {
        position:relative;
        overflow:hidden;
        margin-top: 10px;
    }
    
    .view p {
        margin-top: 20px;
        margin-bottom: 0;
    }
     
    .caption {
        position:absolute;
        top:0;
        right:0;
        background: rgba(70, 216, 210, 0.44);
        width:100%;
        height:100%;
        padding:2%;
        display: none;
        text-align:center;
        color:#fff !important;
        z-index:2;
    }
    
    .caption a {
        padding-right: 10px;
        color: #fff;
    }
    
    .info {
        display: block;
        padding: 10px;
        background: #eee;
        text-transform: uppercase;
        font-weight: 300;
        text-align: right;
    }
    
    .info p, .stats p {
        margin-bottom: 0;
    }
    
    .stats {
        display: block;
        padding: 10px;
        color: white;
    }
    
    .share-links {
        border: 1px solid #eee;
        padding: 15px;
        margin-top: 15px;
    }
    
    .square, .btn {
        border-radius: 0px!important;
    }
    
    /* -- media query for user profile image -- */
    @media (max-width: 767px) {
        .user-image {
            max-height: 400px;
        }
    }
    </style>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


