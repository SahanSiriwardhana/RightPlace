@extends('admin.layout.main-nav5')
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
							<div class="col-md-6 col-sm-12"><h4>Submit Estate News</h4><br>
						
							</div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                  
	                                 
	                                   
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
						<div class="col-lg-3 ">
							
						    @component('admin.layout.side-nav')
								
							@endcomponent
						</div>
	                    <div class="column col-lg-8">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="property-submit-form">
			                            <form method="post" action="/save-estate-news" enctype="multipart/form-data" id="formData" >
											{{ csrf_field() }}
								
											
										
											
			                               

			                                
											<div class="title"><h3>Detailed Information</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Enter detailed information of your property 
											Mentioning other features, why you selling, other benefits and etc.
											(max 5000 characters)
											" rel="popover" data-placement="right" data-original-title="Add good description" data-trigger="hover">
									<div class="row">

											<div class="form-group col-lg-12 col-md-6 col-sm-12">
													<label>Title For Your News*</label>
													<input type="text" name="title" placeholder="News Title" required value="{{old('addTitle')}}" onkeyup="countChar2(this)">
													<div id="charNum2">50 characters allowed</div>
												</div>
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
													<textarea name="detailInfo" placeholder="Detailed Information*" required value="{{old('detailInfo')}}" onkeyup="countChar(this)"></textarea>
													<div id="charNum">5000 characters allowed</div>
												</div>
												
												
											</div>
											</div>
											
											<div class="title"><h3>Image</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Images must be JPG or PNG format (max 5 MB)" rel="popover" data-placement="right" data-original-title="Add more photos to get more responses" data-trigger="hover">
												<div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone1" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
											</div>
											</div>
			                                	

			                                  

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                    	<button type="submit" class="theme-btn btn-style-one" id="submit"> Submit </button>
			                                    </div>
											
			                            </form>
			                        </div>
                                </div><p>* are required</p>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                          
											<th style="width: 10%;">id</th>
											<th style="width: 20%;">Title</th>
                                            <th style="width: 35%;">Description</th>
                                            <th style="width: 20%;">Image</th>
                                            <th  style="width: 10%;">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($news as $item)

                                           
                
                                        <tr>
                                       
											<td>{{$item->id}}</td>
											<td>{{$item->title}}</td>
                                            <td>{{$item->description}}</td>
                                            <td><img src="{{ URL::asset('images/news/'.$item->image.'')}}" style="width: 100px;"></td>
                                            
                                            <td>
                                                {{-- <a href="#" class="edit" title="Deativate" data-toggle="tooltip"><i class="material-icons">block</i></a>
                                            --}}
                                                <a href="/dashboard/deleteNews/{{$item->id}}" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash" style="color: red"></i></a>
                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
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