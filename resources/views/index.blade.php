<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>RightPlace.lk</title>
<!-- Stylesheets -->
<link href="{{URL::asset('css/bootstrap.css')}}"  rel="stylesheet">
<link href="{{URL::asset('plugins/revolution/css/settings.css')}}"  rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link  href="{{URL::asset('plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{URL::asset('plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/blue-theme.css" rel="stylesheet">


<link rel="icon" href="{{ asset('images/rightplace_ico.png') }}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
</script>
<style>
    hr {height:2px; border:none; color:#0074D9; background-color:#0074D9;margin-top: 5%}
    .modal-dialog, .modal-content{
        border-radius: 0px;
        border: 2px solid #0074D9;
    }
    .myVideo {
      position: absolute;
      top:0;
      left: 0;
      height: 100vh;
      width: 100%;
      
    }
    .myVideo video{
        min-width: 100%;
        min-height: 100%;
    }
.open-button {
  background-color: #0074D9;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
  z-index: 100000000000;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 100000000000;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 100px;
}



/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #0074D9;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 1;
  border-radius: 0;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}



/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    </style>
    {{-- <script type="text/javascript">
        $(window).on('load',function(){
            document.getElementById("myForm").style.display = "block";
        });
    </script> --}}
</head>

<body>
        {{-- <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/564f634590d1bced690e0633/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script> --}}

        <!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();






    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5cfa01ecb534676f32adc53c/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);


    $( document ).ready(function() {
        Tawk_API.toggle();
    });

    })();

    

</script> --}}
<script type="text/javascript">
    $(window).on('load',function(){
        document.getElementById("myForm").style.display = "block";
    });
</script>



<div class="chat-popup" id="myForm" >
  <form action="{{route('popupsubmit')}}" class="form-container" method="POST">
    <div class="row" style="background-color: #0074D9;margin-top:-15px;padding-bottom: 5px;"> 
        <div class="col-md-10">  
            <h3 style="color: white;padding-top:5px; ">We are here to advice you..</h3>
        </div>
        <div class="" style="padding-top:5px;padding-left: 30px">
        <button type="button" class="close" data-dismiss="alert" onclick="closeForm()" aria-label="Close" style=" display:block;
        margin-left:  0;
        margin-right: auto;">
          <span aria-hidden="true">×</span>
        </button>
        </div>
        
    
</div>
    @if(session()->has('successFullySentEmail'))
    <br>
    <div class="alert alert-success">
        {{session()->get('successFullySentEmail')}}
    </div>
      <br>
    <p></p>
  <p><a href=""> Resend massage </a></p>  
    @else
    
   
    <input  type = "text" name="name" class = "form-control" style="margin-top: 8px;border-radius: 0 " placeholder = "Enter your name" required/>


    <input type = "text" name="email" class = "form-control" style="margin-top: 8px;border-radius: 0" placeholder = "Enter your email" required/>


    <input type = "text" name="phone" class = "form-control" style="margin-top: 8px;border-radius: 0" placeholder = "Enter your phone number" required/>

    
    <textarea placeholder="Type message.." style="margin-top: 8px;border-radius: 0" name="msg" required class="form-control"></textarea>

    <button type="submit" style="margin-top: 8px;" class="btn" >Send</button>

    @endif
      


    {{csrf_field()}}
    {{-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> --}}
  </form>
</div>


    <!--End of Tawk.to Script-->
  <!-- The Modal -->
  {{-- <button class="open-button btn-danger" onclick="openForm()">Contact Us</button> --}}

  


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
                            <li><i class="la la-map-marker"></i> 5/1/1, Colombo Rad, 10290 Boralesgamuwa, Sri Lanka</li>
                            <li><i class="la la-envelope-o"></i><a href="#">Supportyou@Interiores.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                   
                        <ul class="social-icon-one clearfix">
                            <li><a href="https://www.facebook.com/rightplace.lk/"><i class="la la-facebook-f"></i></a></li>
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
                            <div class="logo"><a href="/"><img src="images/logo_right.png" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu"></span>
                                    </button>
                                </div>
                                
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
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
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="la la-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="http://expert-themes.com/html/willies/blog.html">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span class="la la-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                    <a href="/" title=""><img src="images/logo_right.png" alt="" title=""></a>
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
                                    <div class="btn-box" style="padding-top: 5px"><a  href="/dashboard/add-type" class="theme-btn btn-style-four">Post Your Add</a></div>
                                </li>
                            </ul>              
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        
                       <div class="myVideo">
                        <video playsinline autoplay muted loop id="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120">
                            <source src="video/home_video/Real Estate Promotion Video.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    </li>

                   
                  
                   
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

     <!-- Property Section Two -->
     <section class="property-section-two" style="margin-top: -130px;">
    	<div class="auto-container">
    		<div class="sec-title">
    			<span class="title">Find Your Right Place</span>
    			<h2>FEATURED PROJECTS</h2>
    		</div>

    		<div class="property-carousel owl-carousel owl-theme">
                @foreach ($featuredProjects as $featuredProject)
                    
                <!-- New Property -->
    			<div class="new-property">
		    		<div class="row" style="">
		    			<!-- Content Column -->
		    			<!-- Image column -->
		    			<div class="image-column col-lg-12 col-md-12 col-sm-12">
		    				<div class="inner-column">
		    					<figure class="image"><a href="images/featured_project/{{$featuredProject->image}}" class="lightbox-image" data-fancybox="images"><img src="images/featured_project/{{$featuredProject->image}}" alt="" style="width: 60%"></a></figure>
		    				</div>
		    			</div>
		    		</div>
    			</div>
                @endforeach
    			
                
            </div>
            <hr>
    	</div>
    </section>
    <!--End Property Section Two -->



    <!-- Recent Section -->
    <section class="property-section" style="margin-top: -12%">
        <div class="auto-container">
              
            <div class="sec-title">
                <span class="title">FIND YOUR RIGHT PLACE</span>
                <h2>FEATURED PROPERTIES</h2>
            </div>

            <div class="row">
                
                @foreach ($adsResent as $item)
                    
               
                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                    @if ($item->image1 != null)
                                    <img src="/images.image_uplode/{{$item->image1}}" alt="" style="height: 200px">
                                @else
                                    <img src="/images.image_uplode/land_image.jpg" alt="" style="height: 200px">
                                @endif
                            </figure>
                            @if ($item->adType=='1')
											<span class="for">For Sale</span>
											@else	
											<span class="for">For Rent</span>
											@endif
                           
                            <span class="featured">FEATURED</span>
                            <ul class="option-box">
                                <li><a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                <li><a href="#"><i class="la la-heart"></i></a></li>
                                <li><a href="#"><i class="la la-retweet"></i></a></li>
                            </ul>
                           
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="#">{{$item->type}}</a></li>
                
                            </ul>
                            <h3><a href="/{{$item->tableName}}/{{$item->id}}">{{$item->title}}</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i>
                            
                                @foreach ($cities as $city)
                                @if ($city->cid==$item->town)
                                    {{$city->cname}}	
                                @endif
                                @endforeach 
                                ,
                                @foreach ($districts as $district)
                                @if ($district->did==$item->city)
                                    {{$district->dname}}	
                                @endif
                                @endforeach
                            </div>
                            
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="/{{$item->tableName}}/{{$item->id}}" class="theme-btn">More Detail</a></div>
                                <div class="price">Rs {{$item->rent_per_month}}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Block -->
                @endforeach
            </div>
            
            <div class="load-more-btn text-center">
                <a href="/buy" class="theme-btn btn-style-two">Load More</a>
            </div>
        </div>
    </section>
    <!--End Property Section -->

    <!-- About Us -->
    <section class="about-us" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">The Best Place to Find Your Right Place</span>
                            <h2>WHAT WE DO</h2>
                        </div>

                        <div class="text" style="text-align: justify"><strong>RightPlace.lk</strong> services are delivered by people who combine entrepreneurial spirit and a deep understanding of specialist property sectors with the highest standards of client care. Through our advice, our property management capabilities, property valuation expertise and the transactional services we provide, we help our clients to fulfil their real estate needs – whatever and wherever they are. </div>

                        <div class="row features">
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="/what-we-do">Buy Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="/what-we-do">REnt Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-5"></span>
                                    <h4><a href="/what-we-do">Real Estate Kit</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-apartment"></span>
                                    <h4><a href="/what-we-do">Sale Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image"><img src="images/resource/image-2.jpg" alt=""></figure>
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon la la-play" aria-hidden="true"></i><span class="ripple"></span></a>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
    <!-- About Us -->T

    <!--Popular Places Section-->
    <section class="popular-places-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">Brows your Dream Destiny</span>
                <h2>BEST WAY TO FIND YOUR RIGHT PLACE</h2>
            </div>
    
            <div class="masonry-items-container clearfix">
                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-1.jpg" alt=""></figure>
                        <div class="info-box">
                           
                            <h3 class="place"><a href="#">Apartment</a></h3>
                            <div class="properties"><a href="#">7 Properties</a></div>
                            <div class="view-all"><a href="#">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-2.jpg" alt=""></figure>
                        <div class="info-box">
                            
                            <h3 class="place"><a href="#">Hotels</a></h3>
                            <div class="properties"><a href="#">9 Properties</a></div>
                            <div class="view-all"><a href="#">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-3.jpg" alt=""></figure>
                        <div class="info-box">
                            
                            <h3 class="place"><a href="#">Office Spaces</a></h3>
                            <div class="properties"><a href="#">5 Properties</a></div>
                            <div class="view-all"><a href="#">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-4.jpg" alt=""></figure>
                        <div class="info-box">
                           
                            <h3 class="place"><a href="#">House in Projects</a></h3>
                            <div class="properties"><a href="#">12 Properties</a></div>
                            <div class="view-all"><a href="#">View All</a></div>
                        </div>
                    </div>
                </div>


                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-5.jpg" alt=""></figure>
                        <div class="info-box">
                            
                            <h3 class="place"><a href="#">New Development</a></h3>
                            <div class="properties"><a href="#">6 Properties</a></div>
                            <div class="view-all"><a href="#">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </section>
    <!--Portfolio Section-->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/2.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column">
                    <div class="sec-title light">
                        <span class="title">In Few Seconds with Right Place</span>
                        <h2>Buyor Sale Your Property</h2>
                    </div>
                </div>

                <!-- Button Column -->
                <div class="button-column">
                    <a href="/dashboard/add-type" class="theme-btn btn-style-three">SUBMIT PROPERTY</a>
                    <a href="/buy" class="theme-btn btn-style-one">BROWSE PROPERTY</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->


      <!--Clients Section-->
      <section class="clients-section style-three">
        <div class="auto-container">
                <div class="sec-title">
                        <span class="title">Right Place</span>
                        <h2>Our Strategic Partners</h2>
                    </div>
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/297EFC38-9419-463C-A216-EEFF11BA2FAE.jpeg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/sample 1.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/use-logo.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/Trustus.jpg" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section--> 

    <!-- News Section -->
    <!--End News Section -->

   
    <!-- Main Footer -->
    <footer class="main-footer style-three">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-logo">
                            <figure class="image"><a href="/"><img src="images/png2.png" alt=""></a></figure>
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
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
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
                                            <li><span class="la la-map-marker"></span> 5/1/1, Colombo Rad, 10290 Boralesgamuwa,<br/> Sri Lanka</li>
                                            <li><span class="la la-phone"></span> (+94)70 399 8877</li>
                                            <li><span class="la la-envelope"></span><a href="#">info@benaa.com</a></li>
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
                                            <span class="date">1 October, 2017</span>
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
    <!-- End Main Footer --></div>
<!--End pagewrapper-->



<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

</html>