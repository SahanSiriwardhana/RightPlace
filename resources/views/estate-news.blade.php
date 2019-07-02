@extends('layout.main-header')
@section('content')
    
    
    <!--Main Slider-->
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url('{{ URL::asset('images/background/rent.png')}}');">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Real Estate News</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Real Estate News</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    

<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="upper-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ URL::asset('images/news/'.$news->image.'')}}" alt=""></figure>
                            </div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                               
                                <li> {{date('d M Y ,g:ia', strtotime($news->created_at))}}</li>
                                
                            </ul>
                        <h2>{{$news->title}}</h2>
                            <p>{{$news->description}}.</p>
                            
                        </div>

                       
                </div>

                
            </div>
        </div>
    </div>
</div>
    <!-- End Sidebar Container -->

    

    

    @endsection