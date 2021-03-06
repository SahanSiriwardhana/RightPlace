<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:30:35 GMT -->
<head>
<meta charset="utf-8">
<title>RightPlace.lk | Submit Property</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/blue-theme.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
.list-group{
	border-radius: 0px
}

#prop:hover{
    background-color: white;
}
.topNav{

}
.topNav:hover{
    background-color: black;
    
}
</style>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header">
        <div class="main-box clearfix">
        	<!-- Logo Box -->
            <div class="logo-box">
                <div class="logo"><a href="/"><img src="images/ed-logo.png" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
            <div class="upper-right">
                <ul class="clearfix">
                  
                    <li class="dropdown option-box">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                            <span style="font-size:150%">
                            <i class="fas fa-user-circle"></i>
                            {{-- <img src="images/resource/user-circle-solid.png" alt="avatar" class="thumb"> --}}
                            {{Auth::user()->first_name}}
                           </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/dashboard/my-account">My Account</a>
                            <a class="dropdown-item" href="/dashboard/my-add">My ads</a>
                            @can('isAdmin')
                            <a class="dropdown-item" href="/dashboard/approve-panel">Approve ads</a>
                            @endcan
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </li>
                    <li class="submit-property">
                    	<a href="/dashboard/add-type" class="theme-btn btn-style-one">Submit Property <i class="pe-7s-up-arrow"></i></a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <!--End Header Lower-->
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Bar -->
   
    <!--End Hidden Bar -->

    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area properties-box">
	            <div class="dashboard-content justify-content-center">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
							<div class="col-md-12 col-sm-12"><h1 class="text-center">Welcome <strong> {{Auth::user()->first_name}}</strong> Let's post an ad.<br>Choose any option below </h4><br>
						
							</div>
	                        
	                    </div>
                    </div>
                    <div class="d-flex justify-content-center bg-secondary mb-3 text-center">
                            <div class="p-2 col-lg-4">
                                <a href="/dashboard/sell" class="prop">
                                    <div class="card bg-light topNav" id="">
                                            <div class="card-body">
                                              <h4 class="card-title" ><i class="fas fa-home fa-3x" style="color:#0074D9"></i></h4>
                                              
                                              <h4 style="color:black" id="heka">Sell Your Property</h4>
                                             
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 col-lg-4">
                                <a href="/dashboard/rent">
                                    <div class="card bg-light topNav2">
                                            <div class="card-body">
                                                  <h4 class="card-title"><i class="far fa-money-bill-alt fa-3x" style="color:#0074D9"></i></h4>
                                        
                                                  <h4 style="color:black" id="heka2">Rent Your Property</h4>
                                            </div>
                                          </div>
                                        </a>
                            </div>
                            
                          </div>
	             
					
				</div>
				
	          
            </div>
            <p class="copyright-text">© 2019 <a href="/">RightPlace.lk | </a> All right reserved.</p>
	    </div>
	</div>

</div>
    
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
    $('#js-example-basic-single').select2();
});
$('#popoverData').popover();
$('#popoverData1').popover();
$(document).ready(function () {
    var timer;
var delay = 1000;
    $('.topNav').hover(function () {
        
        $(this).removeClass('bg-light');
            $(this).addClass('bg-primary');
            $('#heka').css("color","white");
        }, function () {
            $(this).removeClass('bg-primary');
            $(this).addClass('bg-light');
            $('#heka').css("color","black");
        }
        );

        $('.topNav2').hover(function () {
        $(this).removeClass('bg-light');
            $(this).addClass('bg-primary');
            $('#heka2').css("color","white");
        }, function () {
            $(this).removeClass('bg-primary');
            $(this).addClass('bg-light');
            $('#heka2').css("color","black");
        });
    });
    
</script>
</body>

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:31:39 GMT -->
</html>