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


<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    hr {height:2px; border:none; color:#0074D9; background-color:#0074D9;margin-top: 5%}
    .modal-dialog, .modal-content{
        border-radius: 0px;
        border: 2px solid #0074D9;
    }
    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%; 
      min-height: 100%;
      object-fit: cover;
      overflow: hidden;
      position: absolute;
    }
    </style>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#myModal').modal('show');
        });
    </script>
</head>

<body>
  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color: #0074D9">
          <h4 class="modal-title">
            <div class="title "><h3 style="color: black">Basic Info</h3></div>
          </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body property-search-form ">
            
        <!-- Property Search Form -->
       
            <form method="post" action="http://expert-themes.com/html/willies//">
                <div class="row no-gutters">
                    <!-- Form Group -->
                    <div class="form-group">
                        <label>Name :</label>
			            <input type="text" name="text" placeholder="Name" required>
                    </div>

                    <!-- Form Group -->
                    <div class="form-group">
                        <label>Contact Number :</label>
			            <input type="text" name="text" placeholder="Contact Number" required>
                    </div>

                    <!-- Form Group -->
                    <div class="form-group">
                        <label>Email :</label>
			            <input type="text" name="text" placeholder="Email" required>
                    </div>


                    <!-- Form Group -->
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" id="" required></textarea>
			           
                    </div>
                    <!-- Form Group -->
                    <div class="form-group">
                        <button type="submit" class="theme-btn btn-style-one">Submit</button>
                    </div>
                </div>
            </form>
     
        </div>
        
        
      </div>
    </div>
  </div>

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
                            <li><i class="la la-phone"></i> 071 6206312</li>
                            <li><i class="la la-home"></i> 256 Interior the good, New York</li>
                            <li><i class="la la-envelope-o"></i><a href="#">Supportyou@Interiores.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                   
                        <ul class="social-icon-one clearfix">
                            <li><a href="#"><i class="la la-facebook-f"></i></a></li>
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
                            <div class="logo"><a href="/"><img src="images/ed-logo.png" alt="" title=""></a></div>
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
                    <a href="/" title=""><img src="images/ed-logo.png" alt="" title=""></a>
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
                                        <li><a href="/contact">Contact Us</a></li>
                                <li>
                                    <div class="btn-box" style="padding-top: 5px"><a href="/dashboard/add-post" class="theme-btn btn-style-four">Post Your Add</a></div>
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
                        
                       
                        <video playsinline autoplay muted loop id="myVideo" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120">
                            <source src="Free Animated Videos For Real Estate Agents.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                          </video>
                        
                    </li>
                  
                   
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

     <!-- Property Section Two -->
     <section class="property-section-two">
    	<div class="auto-container">
    		<div class="sec-title">
    			<span class="title">FIND NOW YOUR DREEM HOUSE</span>
    			<h2>FEATURED PROJECTS</h2>
    		</div>

    		<div class="property-carousel owl-carousel owl-theme">
    			<!-- New Property -->
    			<div class="new-property">
		    		<div class="row">
		    			<!-- Content Column -->
		    			<div class="content-column col-lg-6 col-md-12 col-sm-12">
		    				<div class="inner-column">
		    					<span class="status">FOR SALE</span>
		    					<h3><a href="property-detail.html">Independent Apartment With Modern Design</a></h3>
		    					<div class="start-from"><span>START FROM</span> $ 356,354</div>
		    					<div class="lucation"><i class="la la-map-marker"></i>Orland Park, IL 35785, Chicago, United State</div>

		    					<div class="text">Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres Creating preservation etes quibusdam.</div>

		    					<ul class="property-info clearfix">
		                            <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
		                            <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
		                            <li><i class="flaticon-car"></i> 2 Garage</li>
		                            <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
		                        </ul>
		    				</div>
		    			</div>

		    			<!-- Image column -->
		    			<div class="image-column col-lg-6 col-md-12 col-sm-12">
		    				<div class="inner-column">
		    					<figure class="image"><a href="images/resource/image-3.jpg" class="lightbox-image" data-fancybox="images"><img src="images/resource/image-3.jpg" alt=""></a></figure>
		    				</div>
		    			</div>
		    		</div>
    			</div>

    			<!-- New Property -->
    			<div class="new-property">
		    		<div class="row">
		    			<!-- Content Column -->
		    			<div class="content-column col-lg-6 col-md-12 col-sm-12">
		    				<div class="inner-column">
		    					<span class="status">FOR SALE</span>
		    					<h3><a href="property-detail.html">Independent Apartment With Modern Design</a></h3>
		    					<div class="start-from"><span>START FROM</span> $ 356,354</div>
		    					<div class="lucation"><i class="la la-map-marker"></i>Orland Park, IL 35785, Chicago, United State</div>

		    					<div class="text">Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres Creating preservation etes quibusdam.</div>

		    					<ul class="property-info clearfix">
		                            <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
		                            <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
		                            <li><i class="flaticon-car"></i> 2 Garage</li>
		                            <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
		                        </ul>
		    				</div>
		    			</div>

		    			<!-- Image column -->
		    			<div class="image-column col-lg-6 col-md-12 col-sm-12">
		    				<div class="inner-column">
		    					<figure class="image"><a href="images/resource/image-3.jpg" class="lightbox-image" data-fancybox="images"><img src="images/resource/image-3.jpg" alt=""></a></figure>
		    				</div>
		    			</div>
		    		</div>
    			</div>
            </div>
            <hr>
    	</div>
    </section>
    <!--End Property Section Two -->



    <!-- Recent Section -->
    <section class="property-section" style="margin-top: -12%">
        <div class="auto-container">
              
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2>FEATURED PROPERTIES</h2>
            </div>

            <div class="row">
                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                <figure class="image"><img src="images/resource/property-1.jpg" alt=""></figure>
                                <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                                <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                            </div>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Single House Near Orland Park.</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <ul class="option-box">
                                <li><a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                <li><a href="#"><i class="la la-heart"></i></a></li>
                                <li><a href="#"><i class="la la-retweet"></i></a></li>
                            </ul>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Apartment Morden 1243, W No.</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="/property-detail" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <div class="video-link"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery" data-caption=""><i class="icon la la-play-circle" aria-hidden="true"></i></a></div>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Great Home for Single fmaily</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="/property-detail" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                <figure class="image"><img src="images/resource/property-1.jpg" alt=""></figure>
                                <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                                <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                            </div>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Single House Near Orland Park.</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <ul class="option-box">
                                <li><a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                <li><a href="#"><i class="la la-heart"></i></a></li>
                                <li><a href="#"><i class="la la-retweet"></i></a></li>
                            </ul>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Apartment Morden 1243, W No.</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <div class="video-link"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery" data-caption=""><i class="icon la la-play-circle" aria-hidden="true"></i></a></div>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Great Home for Single fmaily</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <span class="title">THE BEST PLACE TO FIND THE HOUSE YOU WANT</span>
                            <h2>WHAT WE DO</h2>
                        </div>

                        <div class="text"><strong>WILLIES REAL ESTATE</strong> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea. </div>

                        <div class="row features">
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="about.html">Buy Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="about.html">REnt Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-5"></span>
                                    <h4><a href="about.html">Real Estate Kit</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-apartment"></span>
                                    <h4><a href="about.html">Sale Property</a></h4>
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
                <span class="title">FIND YOUR DREAM HOUSE IN YOUR CITY</span>
                <h2>BEST WAY TO FIND YOUR RIGHT PLACE</h2>
            </div>
    
            <div class="masonry-items-container clearfix">
                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-1.jpg" alt=""></figure>
                        <div class="info-box">
                           
                            <h3 class="place"><a href="properties.html">Apartment</a></h3>
                            <div class="properties"><a href="properties.html">7 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-2.jpg" alt=""></figure>
                        <div class="info-box">
                            
                            <h3 class="place"><a href="properties.html">Hotels</a></h3>
                            <div class="properties"><a href="properties.html">9 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-3.jpg" alt=""></figure>
                        <div class="info-box">
                            
                            <h3 class="place"><a href="properties.html">Office Spaces</a></h3>
                            <div class="properties"><a href="properties.html">5 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-4.jpg" alt=""></figure>
                        <div class="info-box">
                           
                            <h3 class="place"><a href="properties.html">House in Projects</a></h3>
                            <div class="properties"><a href="properties.html">12 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>


                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-5.jpg" alt=""></figure>
                        <div class="info-box">
                            
                            <h3 class="place"><a href="properties.html">New Development</a></h3>
                            <div class="properties"><a href="properties.html">6 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
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
                        <span class="title">IN FEW SECONDS WITH WILLES</span>
                        <h2>BUY OR SALE YOUR HOUSE</h2>
                    </div>
                </div>

                <!-- Button Column -->
                <div class="button-column">
                    <a href="admin/submit-property.html" class="theme-btn btn-style-three">SUBMIT PROPERTY</a>
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
                        <span class="title">MEET OUR PROFESSIONALS</span>
                        <h2>OUR PARTNERS</h2>
                    </div>
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section--> 

    <!-- News Section -->
    <!--End News Section -->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-logo">
                            <figure class="image"><a href="/"><img src="images/ed-logo.png" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                        <div class="subscribe-form">
                            <form method="post" action="http://expert-themes.com/html/willies/blog.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="theme-btn btn-style-four">Submit</button>
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
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Get in Touch</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><span class="la la-map-marker"></span> 360 Harvest St, North Subract, <br>London. United States Of Amrica.</li>
                                            <li><span class="la la-phone"></span>3695-548555 - 254-6589856</li>
                                            <li><span class="la la-envelope"></span><a href="#">info@benaa.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                                     
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget popular-posts">
                                    <h2 class="widget-title">Popular Posts</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                            <h4><a href="blog-detail.html">Modern Design Building </a></h4>
                                            <span class="date">1 October, 2017</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                            <h4><a href="blog-detail.html">Real Eatate Expo 2018</a></h4>
                                            <span class="date">10 October, 2017</span>
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
                                            <li><a href="properties.html">Rental Builidngs</a></li>
                                            <li><a href="properties.html">Browe all Categories</a></li>
                                            <li><a href="properties.html">Mortagages Rates</a></li>
                                            <li><a href="properties.html">Terms of use</a></li>
                                            <li><a href="properties.html">Privacy Policy</a></li>
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
                    <div class="footer-nav">
                        <ul class="clearfix">
                                        <li ><a href="/what-we-do">What we do</a></li>
                                        <li ><a href="/buy">Buy</a></li>
                                        <li ><a href="/rent">Rent</a></li>
                                        <li><a href="/contact">Contact Us</a></li>
                        </ul>

                        
                    </div>
                                                                      
                    <div class="copyright-text">
                        <p><a href="#">RightPlace.lk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
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