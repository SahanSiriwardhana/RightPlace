@extends('admin.layout.main-nav3')
@section('content')
    <!--End Main Header -->
    
    <!-- Hidden Bar -->
   
    <!--End Hidden Bar -->

    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                   
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
			                            <form method="post" action="/save-image" enctype="multipart/form-data" id="imageUpload" >
											{{ csrf_field() }}
											
											
											<div class="title"><h3>Featured Project Gallery</h3></div>
											<div class="col-lg-12" id="popoverData1" class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row">
												
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
														<p style="color: red;">Upload your images to show slider in Home page. Image size should not be geater than 5MB</p>
			                                        <div id="myDropZone2" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
												</div>
										
											</div>
											</div>
                                            <div class="title"><h3>Image Gallery</h3></div>
											<div class="row" id="fetchData">
                                                
										</div>
			                            </form>
			                        </div>
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