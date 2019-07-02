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
.col-sm-3{
    padding-top: 10px;
}
.btn1{
    cursor:pointer;
    color: gray;
}
.btn1:hover  { 

 border:1px solid #0074D9;
 color: #0074D9;
 filter: contrast(160%);
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
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="images/resource/thumb-1.jpg" alt="avatar" class="thumb"> {{Auth::user()->first_name}}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="dashboard.html">My Account</a>
                            <a class="dropdown-item" href="/dashboard/my-add">My ads</a>
                            @can('isAdmin')
                            <a class="dropdown-item" href="/dashboard/approve-panel">Approve ads</a>
                            @endcan
                            <a class="dropdown-item" href="../index-2.html">Logout</a>
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
	               
                    <div class="d-flex justify-content-start bg-secondary mb-3 text-center">
                            <div class="p-2 col-lg-3">
                                <a href="/dashboard/sell" class="prop">
                                    <div class="card bg-light topNav2" id="">
                                            <div class="card-body">
                                              <h4 class="card-title" ><i class="fas fa-home fa-2x" style="color:#0074D9"></i></h4>
                                              
                                              <p style="color:black" id="heka">Sell Your Property</p>
                                             
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 col-lg-3">
                                <a href="#">
                                    <div class="card bg-primary ">
                                            <div class="card-body">
                                                  <h4 class="card-title"><i class="far fa-money-bill-alt fa-2x" style="color:#0074D9"></i></h4>
                                        
                                                  <p style="color:white" id="heka2">Rent Your Property</p>
                                            </div>
                                          </div>
                                        </a>
                            </div>
                            
                    </div>
	             <div class="row" style="padding-bottom: 20px">
                     <div class="col-lg-12">
                     <h2>Post Free Add</h2> 
                     <p>Select Sub Category</p>
                    </div>
                   
                 </div>
                 <div class="row ">

                        <div class="col-sm-3">
                            <a href="/dashboard/land-rent">
                          <div class="card text-center btn1">
                            <div class="card-body">
                                <img src="images/resource/5.png" alt="avatar" class="" width="100px">
                              <h5 class="card-title ">Land</h5>
                              
                             
                            </div>
                          </div>
                          </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/dashboard/house-rent">
                          <div class="card text-center btn1">
                            <div class="card-body">
                                <img src="images/resource/15.png" alt="avatar" class="" width="100px">
                              <h5 class="card-title">House</h5>
                              
                            
                            </div>
                          </div>
                          </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/dashboard/apartment-rent">
                                <div class="card text-center btn1">
                                  <div class="card-body">
                                      <img src="images/resource/8.png" alt="avatar" class="" width="100px">
                                    <h5 class="card-title">Apartment</h5>
                                  
                                  </div>
                                </div>
                            </a>
                              </div>
                              <div class="col-sm-3">
                                <a href="/dashboard/portion-rooms-rent">
                                <div class="card text-center btn1">
                                  <div class="card-body">
                                      <img src="images/resource/9.png" alt="avatar" class="" width="100px">
                                    <h5 class="card-title">Portion & Rooms</h5>
                                   
                                  </div>
                                </div>
                                </a>
                              </div>
                              <div class="col-sm-3">
                                  <a href="/dashboard/holiday-short-rent">
                                    <div class="card text-center btn1">
                                      <div class="card-body">
                                          <img src="images/resource/1.png" alt="avatar" class="" width="100px">
                                        <h5 class="card-title">Holiday and Short Term Rental</h5>
                                      
                                      </div>
                                    </div>
                                    </a>
                              </div>
                                  <div class="col-sm-3">
                                      <a href="/dashboard/commercial-rent">
                                    <div class="card text-center btn1">
                                      <div class="card-body">
                                          <img src="images/resource/13.png" alt="avatar" class="" width="100px">
                                        <h5 class="card-title">Commercial Property</h5>
                                       
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


        $('.topNav2').hover(function () {
        $(this).removeClass('bg-primary');
        $(this).removeClass('bg-light');
            $(this).addClass('bg-primary');
            $('#heka').css("color","white");
        }, function () {
            
            $(this).removeClass('bg-primary');
            $(this).addClass('bg-light');
            $('#heka').css("color","black");
        });
    });
    
</script>
</body>

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:31:39 GMT -->
</html>