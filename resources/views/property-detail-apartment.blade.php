@extends('layout.main-header')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url('{{ URL::asset('images/background/16.jpg')}}');" >
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Property Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Property Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="upper-info-box">
                    <div class="row">
                            <div class="about-property col-lg-8 col-md-12 col-sm-12">
                                <h2>{{$land->title}}</h2>
                                <div class="location"><i class="la la-map-marker"></i>
                                    @foreach ($cities as $city)
                                                            @if ($city->cid==$land->town)
                                                                {{$city->cname}}	
                                                            @endif
                                                             
                                    @endforeach | <i class="la  la-clock-o"></i>{{$land->updated_at}} | <i class="la la-tag"></i> House |
        
                                </div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> {{$land->house_size}} Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> {{$land->beds}} Bedrooms</li>
                                    
                                    <li><i class="flaticon-bathtub"></i> {{$land->baths}} Bathroom</li>
                                    
                                </ul>
                            </div>
                            <div class="price-column col-lg-4 col-md-12 col-sm-12">
                                    <span class="title">Start From</span>
                                    <div class="price">Rs {{$land->rent_per_month}}.00</div>
                                    <span class="status">
                                        @if ($land->type==1)
                                            For Sale
                                        @else
                                            For Rent	
                                        @endif
                                       
                                    </span>
                                </div>
                        </div>
            </div>
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-detail">
                        <div class="upper-box">
                            <div class="carousel-outer">
                                    <ul class="image-carousel owl-carousel owl-theme">
                                            @if ($land->image1 != null)
                                            <li><a href="{{ URL::asset('images.image_uplode/'.$land->image1.'')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ URL::asset('images.image_uplode/'.$land->image1.'')}}" alt=""></a></li>
                                            @endif
                                            
                                            @if ($land->image2 != null)
                                            <li><a href="{{ URL::asset('images.image_uplode/'.$land->image2.'')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ URL::asset('images.image_uplode/'.$land->image2.'')}}" alt=""></a></li>
                                            @endif
        
                                            @if ($land->image3 != null)
                                            <li><a href="{{ URL::asset('images.image_uplode/'.$land->image3.'')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ URL::asset('images.image_uplode/'.$land->image3.'')}}" alt=""></a></li>
                                            @endif
        
                                            @if ($land->image4 != null)
                                            <li><a href="{{ URL::asset('images.image_uplode/'.$land->image4.'')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ URL::asset('images.image_uplode/'.$land->image4.'')}}" alt=""></a></li>
                                            @endif
                                </ul>
                                    
                                   
                                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                                    @if ($land->image1 != null)
                                                        <li><img src="{{ URL::asset('images.image_uplode/'.$land->image1.'')}}" alt=""></li>
                                                    @endif
                    
                                                    @if ($land->image2 != null)
                                                        <li><img src="{{ URL::asset('images.image_uplode/'.$land->image2.'')}}" alt=""></li>
                                                    @endif
                    
                                                    @if ($land->image3 != null)  
                                                        <li><img src="{{ URL::asset('images.image_uplode/'.$land->image3.'')}}" alt=""></li>
                                                    @endif
                                                    
                                                    @if ($land->image4 != null)
                                                        <li><img src="{{ URL::asset('images.image_uplode/'.$land->image4.'')}}" alt=""></li>
                                                    @endif
                                    </ul>

                            </div>
                        </div>

                        <div class="lower-content">
                                <h4>Descripation</h4>
                               {{$land->description}}
                                <blockquote>
                                        <h5>   
                                                @if ($land->negotiable=='1')
                                                <span class="badge badge-pill badge-success">Negotiable</span><br>
                                            @endif
                                            <i class="la la-map-signs la-2x"></i>House Size : <span style="color:grey">{{$land->house_size }}</span><br>
                                            <i class="la la-archive la-2x"></i> Item Type :<span style="color:grey"> {{$land->item_type }} </span><br>
                                         
                                            
                                        </h5>
                                </blockquote>
                            </div>
                     <!-- Property Features -->
<div class="property-features">
        <h4>Features </h4>
        <ul class="list-style-one">
            @if ($land->electricity!= null)
                <li>Electricity</li>    
            @endif
            
            @if ($land->water_supply_from_main_supply!= null)
                <li>Water Supply From Main Supply</li>   
            @endif

            @if ($land->water_supply_from_well!= null)
            <li>Water Supply From Well</li>    
            @endif
            @if ($land->seveage_system!= null)
            <li>Sevage System</li>  
            @endif
            @if ($land->septic_tank!= null)
            <li>Septic Tank</li>   
            @endif
           
            
        </ul>
    </div>
                            <div class="lower-content">
                                    <h4>Contact Information</h4>
                                    <div class="row" style="padding-left: 10%">
                                        <span id="numberCircle" >{{$user->first_name[0]}}</span>&nbsp;&nbsp;
                                    <p style="font-size: 18px;"><strong style="text-transform: capitalize"> {{$user->first_name}}</strong><br><small style="font-size: 10px;padding-top: -150px;">Verified User &nbsp;<i class="la la-check-circle-o"></i> </small></p>
        
                                    </div>
                                    <div class="row" style="padding-left: 8%;padding-bottom: 10px;">
                                            <span class="btn-3 col-md-8">
                                                <i class="la la-phone-square"></i> {{substr($land->phone, 0,3) }} - {{substr($land->phone, 3,3) }} -{{substr($land->phone, 6,4) }} <br>
                                                <div style="margin-top: 5%;"> 
                                                    <i class="la la-envelope"><strong style="font-size:80%;text-transform: capitalize"> {{$user->email}}</strong></i> 
                                                </div>
                                            </span>
                                    </div>
                                </div>
                                @can('isAdmin')
                                <div class="row">
                                    @if ($land->add_status=='pending')
                                    <div class="form-group">
                                            <button class="theme-btn btn-style-one approveAdd" data-id="{{$land->id}}" data-token="{{@csrf_token()}}">Approve</button>
                                    </div>
                                    @endif
                                    
                                </div>
                               @endcan
    

                       

                      




                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">


                        <!-- Agent Form Widget -->
                        <div class="sidebar-widget agent-from-widget">
                            <div class="sidebar-title"><h2>Contact Agent</h2></div>
                            <div class="widget-content">
                                <div class="agent-form">
                                    <form method="post" action="http://expert-themes.com/html/willies/contact.html">
                                        <div class="form-group">
                                            <input type="text" name="username" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="number" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="number" placeholder="Phone No." required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        

                        <!-- Recent Properties -->
                        <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title"><h2>Recent Properties</h2></div>
                            <div class="widget-content">
                                    @foreach ($resentLands as $resentLand)
                                    <!-- Post -->
                                    <article class="post">
                                        <div class="post-thumb">
                                            <a href="{{$resentLand->id}}">
                                           @if ($resentLand->image1!=null)
                                           <img src="{{ URL::asset('images.image_uplode/'.$resentLand->image1.'')}}" alt="">
                                            @if ($resentLand->type=='1')
                                            <span class="status">Sale</span>
    
                                            @else
                                            <span class="status">Rent</span>
                                            @endif
                                                                                 @else
                                          <img src="{{ URL::asset('images.image_uplode/land_image.jpg')}}" alt="">
                                          @if ($resentLand->type=='1')
                                            <span class="status">Sale</span>
    
                                            @else
                                            <span class="status">Rent</span>
                                            @endif 
                                           @endif     
                                            </a>
                                        </div>
                                        <span class="location">@foreach ($cities as $city)
                                                @if ($city->cid==$resentLand->town)
                                                    {{$city->cname}}	
                                                @endif
                                                @endforeach 
                                                ,
                                                @foreach ($districts as $district)
                                                @if ($district->did==$resentLand->city)
                                                    {{$district->dname}}	
                                                @endif
                                                @endforeach
                                            </span>
                                        <h3><a href="{{$resentLand->id}}">{{$resentLand->title}}</a></h3>
                                        <div class="price">Rs {{$resentLand->rent_per_month}}.00</div>
                                    </article>
                                    @endforeach
                                   



                            </div>
                        </div>

                                   
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    
    @endsection