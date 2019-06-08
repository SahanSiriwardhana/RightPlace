@extends('layout.main-header')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);" >
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
                        <h2>Single House Near Orland Park,..</h2>
                        <div class="location"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                        <ul class="property-info clearfix">
                            <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                            <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                            <li><i class="flaticon-car"></i> 2 Garage</li>
                            <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                        </ul>
                    </div>
                    <div class="price-column col-lg-4 col-md-12 col-sm-12">
                        <span class="title">Start From</span>
                        <div class="price">$ 13,65,000</div>
                        <span class="status">For Sale</span>
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
                                    <li><a href="images/resource/property-detail.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/property-detail.jpg" alt=""></a></li>

                                    <li><a href="images/resource/property-detail-2.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/property-detail-2.jpg" alt=""></a></li>

                                    <li><a href="images/resource/property-detail-3.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/property-detail-3.jpg" alt=""></a></li>

                                    <li><a href="images/resource/property-detail-4.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/property-detail-4.jpg" alt=""></a></li>

                                    <li><a href="images/resource/property-detail-5.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/property-detail-5.jpg" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="images/resource/property-thumb-9.jpg" alt=""></li>
                                    <li><img src="images/resource/property-thumb-5.jpg" alt=""></li>
                                    <li><img src="images/resource/property-thumb-8.jpg" alt=""></li>
                                    <li><img src="images/resource/property-thumb-7.jpg" alt=""></li>
                                    <li><img src="images/resource/property-thumb-6.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="lower-content">
                            <h4>Descripation</h4>
                            <p>Fantastic One Bedroom Facing East In This Amazing Trump Place Doorman Building. There Is A Large Kitchen, Washer And Dryer, Great Light And Plenty Of Closet Space. In Addition, There Are Amazing Custom Made ‘Built Ins’ In The Living Room Providing Plenty Of Storage. The Building Has A Gym, Pool, Children’s Room, Valet Services, Full Time Concierge And Doorman.</p>
                            <blockquote>Main bath has been remodeled including a large shower with a tiled sitting bench. Back yard patio includes no-maintenance cover with built in lights. extra storage inside and out.</blockquote>
                            <p>Short sale approved at $440,000!! home with remodeled kitchen, upgraded cabinets and counterto1ps, open floorplan with spacious layout including a huge separate family room. New windows and newer roof, new airconditioning, fully permitted additonal square footage to the original home. This is a beauty. Huge master with separate sitting/dressing area that would make a perfect nursery.Bonus walk in storage closet in family room.</p>
                        </div>

                        <!-- Property Features -->
                        <div class="property-features">
                            <h4>Essential Information</h4>
                            <ul class="list-style-one">
                                <li>Price: $500,000,0</li>
                                <li>For: Sale</li>
                                <li>Property Types: Resident</li>
                                <li>Area: 1000SQFT</li>
                                <li>Country: USA </li>
                                <li>City: Sterling</li>
                                <li>Garages: 3 </li>
                                <li>Bedrooms: 6 </li>
                                <li>Bathrooms: 4</li>
                            </ul>
                        </div>

                        <!-- Property Features -->
                        <div class="property-features">
                            <h4>Home Amenities</h4>
                            <ul class="list-style-one">
                                <li>Air Conditioning</li>
                                <li>Alarm System</li>
                                <li>Basketball court</li>
                                <li>Bedding</li>
                                <li>Dishes</li>
                                <li>Dishwasher</li>
                                <li>Doorman</li>
                                <li>Elevator</li>
                                <li>Fireplace</li>
                                <li>Garden</li>
                                <li>Gym</li>
                                <li>Hair Dryer</li>
                                <li>Heating System</li>
                                <li>High Ceiling</li>
                                <li>Hot Tub</li>
                                <li>Microwave</li>
                                <li>Iron</li>
                                <li>Laundry</li>
                                <li>Oven</li>
                                <li>Parking</li>
                                <li>Pool</li>
                            </ul>
                        </div>

                        <!-- Flooring Tabs -->
                        <div class="flooring-tabs tabs-box">
                            <div class="clearfix">
                                <h4>Flooring Plans</h4>
                                <ul class="tab-buttons">
                                    <li data-tab="#groud-floor" class="tab-btn active-btn">Grand Floor</li>
                                    <li data-tab="#first-floor" class="tab-btn">First Floor</li>
                                    <li data-tab="#second-floor" class="tab-btn">Second Floor</li>
                                </ul>                
                            </div>

                            <div class="tabs-content">
                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="groud-floor">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/house-map.jpg" alt=""></figure>
                                    </div>
                                </div>

                                <!--Tab -->
                                <div class="tab" id="first-floor">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/house-map.jpg" alt=""></figure>
                                    </div>
                                </div>

                                <!--Tab -->
                                <div class="tab" id="second-floor">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/house-map.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>



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
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    
    @endsection