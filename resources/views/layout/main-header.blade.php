<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>RightPlace.lk</title>
<!-- Stylesheets -->
<link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
<link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{ URL::asset('css/color-themes/blue-theme.css')}}" rel="stylesheet">


<link rel="icon" href="{{URL::asset('images/rightplace_ico.png')}}" type="image/x-icon">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
.rightPlace{
    color: #0074D9;
}
#numberCircle{
  border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  width: 30px;
  height: 30px;
  padding: -1px;
  background: #0074D9;
  border: 2px solid #0074D9;
  color: white;
  text-align: center;
  font-size: 18px;
  text-transform: capitalize;
}
.btn-3{
    font-size: 25px;
    font-weight: 10;
    text-transform: capitalize;
}
.la-check-circle-o{
    color: green;
    font-size: 12px;
}
.approveAdd , .approveAddCom , .approveAddHouse , .approveAddApartment , .approveAddRoom , .approveAddHolyday{
    background-color: red;
}
@media only screen and (max-width: 800px) {
    .header-container1 {
 display: none;
  }
  .main-slider{
      display: block;
  }
  .property-section-two{
    margin-top: 0;
  }
 
}
</style>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
       <!-- Main Header-->
<header class="main-header header-five-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="la la-phone"></i> (+94)70 399 8877</li>
                            <li><i class="la la-map-marker"></i> 5/1/1, Colombo Road, 10290 Boralesgomuwa, Sri Lanka</li>
                           <li><i class="la la-envelope-o"></i><a href="#">RightPlaceteam@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                   
                        <ul class="social-icon-one clearfix">
                            <li><a href="https://www.facebook.com/rightplace.lk"><i class="la la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-linkedin"></i></a></li>
                           <li><button onclick="location.href='/dashboard/add-type';" class="btn-box theme-btn btn-style-four btn-1">Post Your Add</button></li>

                        </ul>
                    
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="main-box">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="/"><img src="{{ URL::asset('images/logo_right.png')}}" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                
                                
                                <div class="collapse show navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                    <li ><a href="/what-we-do">What we do</a></li>
                                        <li ><a href="/buy">Buy</a></li>
                                        <li ><a href="/rent">Rent</a></li>
                                        <li class="dropdown"><a href="#">Property Advice</a>
                                            <ul>
                                                <li><a href="/buyers-advice">Buyer Advice</a></li>
                                                <li><a href="/seller-advice">Seller Advice</a></li>
                                                <li><a href="/landlord-advice">Landlord Advice</a></li>
                                                <li><a href="/renter-advice">Renter Advice</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact">Contact Us</a></li>
                                        
                                    </ul>              
                                </div>
                            </nav><!-- Main Menu End-->
                                
                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <!--Search Box-->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="{{ URL::asset('images/logo_right.png')}}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                           
                                        <li ><a href="/what-we-do">What we do</a></li>
                                        <li ><a href="/buy">Buy</a></li>
                                        <li ><a href="/rent">Rent</a></li>
                                        <li class="dropdown"><a href="#">Property Advice</a>
                                            <ul>
                                                <li><a href="/buyers-advice">Buyer Advice</a></li>
                                                <li><a href="/seller-advice">Seller Advice</a></li>
                                                <li><a href="/landlord-advice">Landlord Advice</a></li>
                                                <li><a href="/renter-advice">Renter Advice</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact">Contact Us</a></li>
                                <li>
                                    <div class="btn-box" onclick="location.href='/dashboard/add-type';" style="padding-top: 5px"><a href="/dashboard/add-type" class="theme-btn btn-style-four">Post Your Add</a></div>
                                </li>
                            </ul>              
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>

    @yield('content')

     <!-- Main Footer -->
     <footer class="main-footer style-three">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-logo">
                            <figure class="image"><a href="/"><img src="{{ URL::asset('images/logo_right.png')}}" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                        <div class="subscribe-form">
                            <form method="post" action="http://expert-themes.com/html/willies/blog.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="theme-btn btn-style-four"><i class="icon la la-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="social-links">
                            <ul class="social-icon-two">
                                <li><a href="https://www.facebook.com/rightplace.lk"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Get in Touch</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><span class="la la-map-marker"></span> 51/1, Colombo Road, <br>
                                                10290 Boralesgomuwa, Sri Lanka</li>
                                            <li><span class="la la-phone"></span> (+94)70 399 8877</li>
                                            <li><span class="la la-envelope"></span><a href="#">RightPlaceteam@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                                   
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget popular-posts">
                                        <h2 class="widget-title">Real Estate News</h2>
                                         <!--Footer Column-->
                                        <div class="widget-content">
                                            <div class="post">
                                                <div class="thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                                <h4><a href="blog-detail.html">Modern Design Building </a></h4>
                                                <span class="date">1 October, 2019</span>
                                            </div>
    
                                           
                                        </div>
                                    </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">USEFUL LINKS</h2>
                                    <div class="widget-content">
                                        <ul class="list clearfix">
                                            <li><a href="/rent">Rent</a></li>
                                            <li><a href="/buy">Buy</a></li>
                                           
                                            <li><a href="#">Terms of use</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <!--Scroll to top-->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>

                <div class="inner-container clearfix">                                             
                    <div class="copyright-text">
                            <p><a href="/">RightPlace.lk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
<!--End pagewrapper-->



<script src="{{ URL::asset('js/jquery.js')}}"></script> 
<script src="{{ URL::asset('js/popper.min.js')}}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('js/jquery-ui.js')}}"></script>
<script src="{{ URL::asset('js/jquery.fancybox.js')}}"></script>
<script src="{{ URL::asset('js/owl.js')}}"></script>
<script src="{{ URL::asset('js/wow.js')}}"></script>
<script src="{{ URL::asset('js/isotope.js')}}"></script>
<script src="{{ URL::asset('js/mixitup.js')}}"></script>
<script src="{{ URL::asset('js/appear.js')}}"></script>
<script src="{{ URL::asset('js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Color Setting -->
<script src="{{ URL::asset('js/color-settings.js')}}"></script>
<script>
    $(document).ready(function(){
        // $('#dist').select2();
        // $('#town').select2();
        // $('#price').select2();
        $('.custom-select-box2').selectmenu();
        //-----------ad type
        $('.custom-select-box2').on('selectmenuchange', function() {
            var adType=$(this).val();
            var token = $(this).data("token");
            window.location.href = "/buy/"+adType;
           
        });
        
        //-----district---------------------
		$('#dist').on('selectmenuchange', function() {
            
           var district=$(this).val();
           window.location.href='/buy/district/'+district
        });

        //-------------town----------------
            $('#town').on('selectmenuchange', function() {
                var town=$(this).val();
                window.location.href='/buy/town/'+town 
            });
        
        //-------------price----------------
            $('#price').on('selectmenuchange', function() {
            var price=$(this).val();
            window.location.href='/buy/price/'+price
            });
        
	
    //-----------ad type rent
    $('#adType2').on('selectmenuchange', function() {
            var adType=$(this).val();
            var token = $(this).data("token");
            window.location.href = "/rent/"+adType;
           
        });
        
        //-----district rent---------------------
		$('#dist2').on('selectmenuchange', function() {
            
           var district=$(this).val();
           window.location.href='/rent/district/'+district
        });

        //-------------town rent----------------
            $('#town2').on('selectmenuchange', function() {
                var town=$(this).val();
                window.location.href='/rent/town/'+town 
            });
        
        //-------------price rent----------------
            $('#price2').on('selectmenuchange', function() {
            var price=$(this).val();
            window.location.href='/rent/price/'+price
            });
        
        
       

        
        
});
    
    $(document).ready(function(){
       
       
        //----function to land-------------
        $(document).on('click', '.approveAdd', function(){


                var id = $(this).data("id");
                var token = $(this).data("token");
                Swal.fire({
                title: 'Are you sure?',
                text: "You want to approve this add!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Approve!'
                }).then((result) => {
                if (result.value) {
                // alert(token);
                $.ajax({
                        url: "/ad-approve/"+id,
                        type: 'get',
                        dataType: "JSON",
                        data: {
                            "id": id,
                            "_method": 'get',
                            "_token": token,
                        },
                        success: function (data){
                            console.log(data);
                            Swal.fire(
                'Sucess!',
                'Ad has been approved',
                'success'
                )
                    
                $('.approveAdd').hide();  
                        }
                    });

                    console.log("It failed");

                }
                })
                //alert(token);
   
        });
        //-------end of function land

        //--function to commercial prop
        $(document).on('click', '.approveAddCom', function(){


var id = $(this).data("id");
var token = $(this).data("token");
Swal.fire({
title: 'Are you sure?',
text: "You want to approve this add!",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, Approve!'
}).then((result) => {
if (result.value) {
// alert(token);
$.ajax({
        url: "/ad-approve-com/"+id,
        type: 'get',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'get',
            "_token": token,
        },
        success: function (data){
            console.log(data);
            Swal.fire(
'Sucess!',
'Ad has been approved',
'success'
)
$('.approveAddCom').hide();
            
        }
    });

    console.log("It failed");

}
})
});
//--------------end of function commercial prop



//-------------fuction to approve home------approveAddHouse
$(document).on('click', '.approveAddHouse', function(){


var id = $(this).data("id");
var token = $(this).data("token");
Swal.fire({
title: 'Are you sure?',
text: "You want to approve this add!",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, Approve!'
}).then((result) => {
if (result.value) {
// alert(token);
$.ajax({
        url: "/ad-approve-house/"+id,
        type: 'get',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'get',
            "_token": token,
        },
        success: function (data){
            console.log(data);
            Swal.fire(
'Sucess!',
'Ad has been approved',
'success'
)
$('.approveAddHouse').hide();
            
        }
    });

    console.log("It failed");

}
})
});

//----------------end of house approve function---------


//------------approve Apartment function approveAddApartment
$(document).on('click', '.approveAddApartment', function(){


var id = $(this).data("id");
var token = $(this).data("token");
Swal.fire({
title: 'Are you sure?',
text: "You want to approve this add!",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, Approve!'
}).then((result) => {
if (result.value) {
// alert(token);
$.ajax({
        url: "/ad-approve-apartment/"+id,
        type: 'get',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'get',
            "_token": token,
        },
        success: function (data){
            console.log(data);
            Swal.fire(
'Sucess!',
'Ad has been approved',
'success'
)
$('.approveAddApartment').hide();
            
        }
    });

    console.log("It failed");

}
})
});
//-------------------------------------------

//----------approveAdd Room function
$(document).on('click', '.approveAddRoom', function(){


var id = $(this).data("id");
var token = $(this).data("token");
Swal.fire({
title: 'Are you sure?',
text: "You want to approve this add!",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, Approve!'
}).then((result) => {
if (result.value) {
// alert(token);
$.ajax({
        url: "/ad-approve-room/"+id,
        type: 'get',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'get',
            "_token": token,
        },
        success: function (data){
            console.log(data);
            Swal.fire(
'Sucess!',
'Ad has been approved',
'success'
)
$('.approveAddRoom').hide();
            
        }
    });

    console.log("It failed");

}
})
});
//--------------------------------------------

//------------approveAdd Holyday rental function 
$(document).on('click', '.approveAddHolyday', function(){


var id = $(this).data("id");
var token = $(this).data("token");
Swal.fire({
title: 'Are you sure?',
text: "You want to approve this add!",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, Approve!'
}).then((result) => {
if (result.value) {
// alert(token);
$.ajax({
        url: "/ad-approve-holyday/"+id,
        type: 'get',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'get',
            "_token": token,
        },
        success: function (data){
            console.log(data);
            Swal.fire(
'Sucess!',
'Ad has been approved',
'success'
)
$('.approveAddRoom').hide();
            
        }
    });

    console.log("It failed");

}
})
});
    });
</script>
</body>

</html>