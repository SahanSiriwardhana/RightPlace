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

    


    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="row">
                    @foreach ($news as $item)
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="/news/{{$item->id}}"><img src="images/news/{{$item->image}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                
                                <li> {{date('d M Y ,g:ia', strtotime($item->created_at))}}</li>
                            </ul>
                            <h3><a href="/news/{{$item->id}}">{{$item->title}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

          
        </div>
    </section>
    

    

    @endsection