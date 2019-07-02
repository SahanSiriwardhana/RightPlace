
    @extends('layout.main-header')
    @section('content')
    <!--Main Slider-->
        <!--End Main Header -->
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ URL::asset('images/background/rent.png')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Rent Properties</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Rent Properties</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                 <!--Sidebar Side-->
                 <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar default-sidebar">
    
                            <!--search box-->
                            <div class="sidebar-widget sort-by">
                               
                              
                                    <div class="form-group">
                                        <select class="custom-select-box" id="adType2" data-token="{{@csrf_token()}}">
                                                <option value="">Sort By</option>
                                                <option value="land" 
                                                @if ($addCategory=='land')
                                                    selected
                                                @endif
                                                >Land</option>
                                                <option value="house"  @if ($addCategory=='house')
                                                selected
                                            @endif>House</option>
                                                <option value="apartment"
                                                @if ($addCategory=='apartment')
                                                selected
                                                @endif
                                                >Apartment</option>
                                                <option value="commercial_property"
                                                @if ($addCategory=='commercial_property')
                                                selected
                                                @endif
                                                >Commercial Properties</option>
                                                <option value="portion_room"
                                                @if ($addCategory=='portion_room')
                                                selected
                                                @endif
                                                >Portion & Rooms</option>
                                                <option value="holyday_short_tearm"
                                                @if ($addCategory=='holyday_short_tearm')
                                                selected
                                                @endif
                                                >Holyday & Short Tearm</option>
                                        </select>
                                    </div>
                            </div>
    
                            <!-- Categories -->
                            <div class="sidebar-widget search-properties">
                                <div class="sidebar-title"><h2>Search Properties</h2></div>
                                <!-- Property Search Form -->
                                <div class="property-search-form style-three">
                                    <form method="post" action="">
                                        <div class="row no-gutters">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <select class="custom-select-box" id="dist2">
                                                    <option value="">Select District</option>
                                                    @foreach ($districts as $district)
                                                        <option value="{{$district->did}}">{{$district->dname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
    
                                           
    
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <select class="custom-select-box" id="town2">
                                                    <option value="">Select Town</option>
                                                    @foreach ($cities as $citie)
                                                        <option value="{{$citie->cid}}">{{$citie->cname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
    
    
                                           
    
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <select class="custom-select-box" id="price2">
                                                    <option value="">Price</option>
                                                    <option value="low2high" 
                                                    @if ($priceCategory=='low2high')
                                                        selected
                                                    @endif
                                                    >Low to High</option>
                                                    <option value="high2low" 
                                                    @if ($priceCategory=='high2low')
                                                        selected
                                                    @endif
                                                    >High to Low</option>
                                                    
                                                </select>
                                            </div>
    
                                           
    
    
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-one">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Form -->
                            </div>
    
                             <!-- Categories -->
                            <div class="sidebar-widget categories">
                                <div class="sidebar-title"><h2>Category Properties</h2></div>
                                <ul class="cat-list">
                                    <li><a href="#">Lands <span>{{$landCount}}</span></a></li>
                                    <li><a href="#">Houses <span>{{$housesCount}}</span></a></li>
                                    <li><a href="#">Apartments <span>{{$apartmentsCount}}</span></a></li>
                                    <li><a href="#">Commercial Properties <span>{{$commercialPropertiesCount}}</span></a></li>
                                    <li><a href="#">Portion & Rooms  <span>{{$commercialPropertiesCount}}</span></a></li>
                                    <li><a href="#">Holyday & Short Tearm <span>{{$roomsCount}}</span></a></li>
                                </ul>
                            </div>
    
                            <!-- Recent Properties -->
                            <div class="sidebar-widget recent-properties">
                                <div class="sidebar-title"><h2>Recent Properties</h2></div>
                                <div class="widget-content">
                                    <!-- Post -->
                                  
                                
                                    @foreach ($resentLands as $resentLand)
                                    <!-- Post -->
                                    <a href="/{{$resentLand->tableName}}/{{$resentLand->id}}">
                                    <article class="post" style="cursor: pointer;" onclick="window.location='/{{$resentLand->tableName}}/{{$resentLand->id}}';">
                                        <div class="post-thumb">
                                            <a href="/{{$resentLand->tableName}}/{{$resentLand->id}}">
                                           @if ($resentLand->image1!=null)
                                           <img src="{{ URL::asset('images.image_uplode/'.$resentLand->image1.'')}}" alt="">
                                            
                                            <span class="status">Rent</span>
    
                                           
                                                                                 @else
                                          <img src="{{ URL::asset('images.image_uplode/land_image.jpg')}}" alt="">
                                       
                                            <span class="status">Rent</span>
    
                                          
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
                                        <h3><a href="/{{$resentLand->tableName}}/{{$resentLand->id}}">{{$resentLand->title}}</a></h3>
                                        <div class="price">Rs {{$resentLand->rent_per_month}}.00 | {{$resentLand->type}}</div>
                                    </article>
                                </a>
                                    @endforeach
                                   
    
                                    
    
                                    
    
                                  
                                </div>
                            </div>
    
                                       
                        </aside>
                    </div>
              
        <!-- End Sidebar Container -->

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-list-view">
                        <div class="upper-box clearfix">
                            <div class="sec-title">
                                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                                <h2>PROPERTY LIST</h2>
                            </div>

                            
                        </div>
                        <div id="resultFetch">  
                                <span class="badge badge-dark" style="font-size: 16px;font-weight: 300;text-transform: capitalize">
                                @if ($priceCategory=='location')
                                    @foreach ($districts as $district)
                                        @if ($district->did==$category)
                                            {{$district->dname}}
                                        @endif
                                    @endforeach
                                @elseif ($priceCategory=='location1')
                                     @foreach ($cities as $city)
                                        @if ($city->cid==$category)
                                            {{$city->cname}}
                                        @endif
                                    @endforeach
                                @else
                                    @if ($category=='commercial_property')
                                        Commercial Property
                                    @elseif ($category=='portion_room')
                                        Portion & Rooms
                                    @elseif ($category=='holyday_short_tearm')
                                        HOLIDAY AND SHORT TERM RENTAL
                                    @else
                                    {{$category}}
                                    @endif
                                   
                                @endif
                                    
                                </span> 
                        @foreach ($ads as $add)
                        
                        <a href="/{{$add->tableName}}/{{$add->id}}" class="prop">
                            <!-- Property Block -->
                            <div class="property-block-three" style="cursor: pointer;" onclick="window.location='/{{$add->tableName}}/{{$add->id}}';">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image">
                                                    @if ($add->image1 != null)
                                                            <img src="/images.image_uplode/{{$add->image1}}" alt="" style="">
                                                        @else
                                                            <img src="/images.image_uplode/land_image.jpg" alt="" style="">
                                                        @endif
                                                </figure>
                                                <span class="for">FOR SALE</span>
                                                
                                                <ul class="option-box">
                                                    <li><a 
                                                        @if ($add->image1 != null)
                                                        href="/images.image_uplode/{{$add->image1}}"
                                                        @else
                                                        href="/images.image_uplode/land_image.jpg"
                                                        @endif
                                                         
                                                        
                                                        class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                 
                                                </ul>
                                            </div>
                                        </div>
    
                                        <div class="column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                            <div class="lower-content">
                                                
                                              
                                                <h3><a href="/{{$add->tableName}}/{{$add->id}}">{{$add->title}}</a></h3>
                                                <div class="lucation"><i class="la la-map-marker"></i> @foreach ($cities as $city)
                                                    @if ($city->cid==$add->town)
                                                        {{$city->cname}}	
                                                    @endif
                                                     
                                                    @endforeach ,
                                                    @foreach ($districts as $district)
                                                    @if ($district->did==$add->city)
                                                        {{$district->dname}}	
                                                    @endif
                                                     
                                                    @endforeach
                                                | <i class="flaticon-clock-1"></i> {{$add->updated_at}} |<i class="la la-tag la-2x"></i>  {{$add->type}}</li>
                                                </div>
                                              <span style="font-size: 20px;color: #0074D9">Rs {{$add->rent_per_month}}.00</span>   
                                                
                                                {{-- <div class="property-price clearfix">
                                                    <div class="read-more"><a href="/{{$add->tableName}}/{{$add->id}}" class="theme-btn">More Detail</a></div>
                                                    
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>  @endforeach
                        </div>
                       
                       
                       
                        
                        <!-- Pagination -->
                        {{-- <div class="styled-pagination">
                            <ul class="clearfix">
                                <li class="prev"><a href="#"><span>Prev</span></a></li>
                                <li><a href="#"><span>1</span></a></li>
                                <li class="active"><a href="#"><span>2</span></a></li>
                                <li><a href="#"><span>3</span></a></li>
                                <li><a href="#"><span>4</span></a></li>
                                <li class="next"><a href="#"><span>Next</span></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
               

    <!--End Property Filter Section -->

    @endsection
    

   