@extends('admin.layout.main-nav')
@section('content')

    <!--End Main Header -->
    
    <!-- Hidden Bar -->
   
    <!--End Hidden Bar -->

    <div class="dashboard">
	    <div class="container-fluid">
			
	        <div class="content-area">
				
	            <div class="dashboard-content">
						
	                <div class="dashboard-header clearfix">
	                    <div class="row">
									
	                    </div>
	                </div>
					<div class="row">
								
					<div class="col-lg-3">
							@component('admin.layout.side-nav')
								
							@endcomponent
					</div>
	                    <div class="column col-lg-9">
							
	                    	<div class="properties-box">
								
									{{-- @if (session()->has('success'))
						

									<div class="alert alert-success alert-dismissible fade in">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											{{ session()->get('success') }}
										  </div>
									
								@endif --}}
	                    		<div class="title"><h3>{{$status}}</h3></div>
	                    		<div class="inner-container">

								@foreach ($ads as $add)
									<!-- Property Block -->
									<a href="/{{$add->tableName}}/{{$add->id}}" class="prop">
			                        <div class="property-block" >
			                        	<div class="inner-box clearfix">
	                                        <div class="image-box">
	                                            <figure class="image">
													@if ($add->image1 != null)
														<img src="/images.image_uplode/{{$add->image1}}" alt="">
													@else
														<img src="/images.image_uplode/land_image.jpg" alt="">
													@endif
												</figure>
	                                        </div>
	                                        <div class="content-box">
												<h3>{{$add->title}}</h3>
												@if ($add->add_status=='pending')
												<span class="badge badge-pill badge-warning">Pending</span>
											@elseif ($add->add_status=='published')
												<span class="badge badge-pill badge-success">Published</span>
											@endif
											@if ($add->adType=='1')
											<span class="badge badge-pill badge-success">For Sale</span>
											@else	
											<span class="badge badge-pill badge-success">For Rent</span>
											@endif
											
												<div class="location"><i class="la la-map-marker"></i>
													@foreach ($cities as $city)
													@if ($city->cid==$add->town)
														{{$city->cname}}	
													@endif
													 
													@endforeach
													
													
													|<i class="la  la-clock-o"></i> {{$add->updated_at}}|<i class="la la-tag"></i> {{$add->type}}</div>
												
	                                          
												<div class="price">Rs {{$add->rent_per_month}}.00
												<br/>
												
												
											</div>
	                                        </div>
		                                    <div class="option-box">
		                                    @if ($status=='Pending Ads List')
												<ul class="action-list">
													
													<li><a href="/{{$add->tableName}}/{{$add->id}}"><i class="la la-eye"></i> View</a></li>
													
												</ul>
											@else
												<ul class="action-list">
													<li><a href="#"><i class="la la-edit"></i> Edit</a></li>
													<li><a href="/{{$add->tableName}}/{{$add->id}}"><i class="la la-eye"></i> View</a></li>
													<li><a href="/{{$add->tableName}}_delete/{{$add->id}}" class="deleteBtn"><i class="la la-trash-o"></i> Delete</a></li>
												</ul>
											@endif
		                                       
		                                    </div>
			                        	</div>
									</div>
								</a>
								@endforeach


                                   
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
				
				<p class="copyright-text">© 2019 <a href="/">RightPlace.lk | </a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>
    
@endsection