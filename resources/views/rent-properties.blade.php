
    @extends('layout.main-header')
    @section('content')
    <!--Main Slider-->
        <!--End Main Header -->
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/rent.png);">
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
                                    <select class="custom-select-box">
                                        <option>Sort By</option>
                                        <option>Land</option>
                                        <option>House</option>
                                        <option>Apartment</option>
                                        <option>Portion & Rooms</option>
                                        <option>Holyday & Short Term</option>
                                        <option>Commercial Properties</option>
                                    </select>
                                </div>
        
                                <!-- Categories -->
                                <div class="sidebar-widget search-properties">
                                    <div class="sidebar-title"><h2>Search Properties</h2></div>
                                    <!-- Property Search Form -->
                                    <div class="property-search-form style-three">
                                        <form method="post" action="http://expert-themes.com/html/willies/index.html">
                                            <div class="row no-gutters">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <select class="custom-select-box">
                                                        <option>Location</option>
                                                        <option>New York</option>
                                                        <option>Los Angeles</option>
                                                        <option>Chicago</option>
                                                        <option>Houston</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                        <select class="custom-select-box">
                                                            <option>Location</option>
                                                            <option>New York</option>
                                                            <option>Los Angeles</option>
                                                            <option>Chicago</option>
                                                            <option>Houston</option>
                                                        </select>
                                                    </div>
        
                                                
        
        
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <select class="custom-select-box">
                                                        <option>Price</option>
                                                        <option>Low to high</option>
                                                        <option>High to low</option>
                                                        
                                                    </select>
                                                </div>
        
                                                
        
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <div class="range-slider-one clearfix">
                                                        <label>Price Filter</label>
                                                        <div class="price-range-slider"></div>
                                                        <div class="input"><input type="text" class="price-amount" name="field-name" readonly></div>
                                                        <div class="title">US Doller</div>
                                                    </div>
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
                                        <li><a href="#">Apartments <span>22</span></a></li>
                                        <li><a href="#">Villas <span>45</span></a></li>
                                        <li><a href="#">Open Houses <span>62</span></a></li>
                                        <li><a href="#">Offices <span>70</span></a></li>
                                        <li><a href="#">Residentals <span>90</span></a></li>
                                        <li><a href="#">Co-Working <span>65</span></a></li>
                                        <li><a href="#">Flat <span>48</span></a></li>
                                        <li><a href="#">Cottage <span>24</span></a></li>
                                    </ul>
                                </div>
        
                                <!-- Recent Properties -->
                                <div class="sidebar-widget recent-properties">
                                    <div class="sidebar-title"><h2>Recent Properties</h2></div>
                                    <div class="widget-content">
                                        <!-- Post -->
                                        <article class="post">
                                            <div class="post-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="images/resource/property-thumb-1.jpg" alt="">
                                                    <span class="status">Rent</span>
                                                </a>
                                            </div>
                                            <span class="location">Lundon, UK</span>
                                            <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                            <div class="price">$ 760,000</div>
                                        </article>
        
                                        <!-- Post -->
                                        <article class="post">
                                            <div class="post-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="images/resource/property-thumb-2.jpg" alt="">
                                                    <span class="status">Rent</span>
                                                </a>
                                            </div>
                                            <span class="location">Lundon, UK</span>
                                            <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                            <div class="price">$ 760,000</div>
                                        </article>
        
                                        <!-- Post -->
                                        <article class="post">
                                            <div class="post-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="images/resource/property-thumb-3.jpg" alt="">
                                                    <span class="status hot">hot</span>
                                                </a>
                                            </div>
                                            <span class="location">Lundon, UK</span>
                                            <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                            <div class="price">$ 760,000</div>
                                        </article>
        
                                        <!-- Post -->
                                        <article class="post">
                                            <div class="post-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="images/resource/property-thumb-4.jpg" alt="">
                                                    <span class="status">Rent</span>
                                                </a>
                                            </div>
                                            <span class="location">Lundon, UK</span>
                                            <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                            <div class="price">$ 760,000</div>
                                        </article>
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
    
                            <!-- Property Block -->
                            <div class="property-block-three">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="images/resource/property-1.jpg" alt=""></figure>
                                                <span class="for">FOR RENT</span>
                                                <span class="featured">FEATURED</span>
                                                <ul class="option-box">
                                                    <li><a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                                </ul>
                                            </div>
                                        </div>
    
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="lower-content">
                                                <ul class="tags">
                                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                                    <li><a href="property-detail.html">Bar</a>,</li>
                                                    <li><a href="property-detail.html">House</a>,</li>
                                                </ul>
                                                <div class="thumb"><img src="images/resource/thumb-5.jpg" alt=""></div>
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
                                </div>
                            </div>
    
                            <!-- Property Block -->
                            <div class="property-block-three">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                                                <span class="for">FOR RENT</span>
                                                <span class="featured">FEATURED</span>
                                                <ul class="option-box">
                                                    <li><a href="images/resource/property-2.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                                </ul>
                                            </div>
                                        </div>
    
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="lower-content">
                                                <ul class="tags">
                                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                                    <li><a href="property-detail.html">Bar</a>,</li>
                                                    <li><a href="property-detail.html">House</a>,</li>
                                                </ul>
                                                <div class="thumb"><img src="images/resource/thumb-6.jpg" alt=""></div>
                                                <h3><a href="property-detail.html">Apartment Morden 1243, W No.</a></h3>
                                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                                <ul class="property-info clearfix">
                                                    <li><i class="flaticon-dimension"></i> 506 Sq-Ft</li>
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
                            </div>
    
                            <!-- Property Block -->
                            <div class="property-block-three">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                                                <span class="for">FOR RENT</span>
                                                <span class="featured">FEATURED</span>
                                                <ul class="option-box">
                                                    <li><a href="images/resource/property-3.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                                </ul>
                                            </div>
                                        </div>
    
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="lower-content">
                                                <ul class="tags">
                                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                                    <li><a href="property-detail.html">Bar</a>,</li>
                                                    <li><a href="property-detail.html">House</a>,</li>
                                                </ul>
                                                <div class="thumb"><img src="images/resource/thumb-7.jpg" alt=""></div>
                                                <h3><a href="property-detail.html">Great Home for Single fmaily.</a></h3>
                                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                                <ul class="property-info clearfix">
                                                    <li><i class="flaticon-dimension"></i> 506 Sq-Ft</li>
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
                            </div>
    
                            <!-- Property Block -->
                            <div class="property-block-three">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="images/resource/property-4.jpg" alt=""></figure>
                                                <span class="for">FOR RENT</span>
                                                <span class="featured">FEATURED</span>
                                                <ul class="option-box">
                                                    <li><a href="images/resource/property-4.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                                </ul>
                                            </div>
                                        </div>
    
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="lower-content">
                                                <ul class="tags">
                                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                                    <li><a href="property-detail.html">Bar</a>,</li>
                                                    <li><a href="property-detail.html">House</a>,</li>
                                                </ul>
                                                <div class="thumb"><img src="images/resource/thumb-8.jpg" alt=""></div>
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
                                </div>
                            </div>
    
                            <!-- Property Block -->
                            <div class="property-block-three">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="images/resource/property-5.jpg" alt=""></figure>
                                                <span class="for">FOR RENT</span>
                                                <span class="featured">FEATURED</span>
                                                <ul class="option-box">
                                                    <li><a href="images/resource/property-5.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                                </ul>
                                            </div>
                                        </div>
    
                                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="lower-content">
                                                <ul class="tags">
                                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                                    <li><a href="property-detail.html">Bar</a>,</li>
                                                    <li><a href="property-detail.html">House</a>,</li>
                                                </ul>
                                                <div class="thumb"><img src="images/resource/thumb-9.jpg" alt=""></div>
                                                <h3><a href="property-detail.html">Apartment Morden 1243, W No.</a></h3>
                                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                                <ul class="property-info clearfix">
                                                    <li><i class="flaticon-dimension"></i> 506 Sq-Ft</li>
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
                            </div>
    
                          
                            
                            <!-- Pagination -->
                            <div class="styled-pagination">
                                <ul class="clearfix">
                                    <li class="prev"><a href="#"><span>Prev</span></a></li>
                                    <li><a href="#"><span>1</span></a></li>
                                    <li class="active"><a href="#"><span>2</span></a></li>
                                    <li><a href="#"><span>3</span></a></li>
                                    <li><a href="#"><span>4</span></a></li>
                                    <li class="next"><a href="#"><span>Next</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--End Property Filter Section -->

    @endsection
    

   