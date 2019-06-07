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
							<div class="col-md-6 col-sm-12"><h4>Submit Property</h4><br>
							<h5>Sale -> House</h5>
							</div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                  
	                                    <li><a href="/dashboard/rent">Back to category</a></li>
	                                   
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
			                            <form method="post" action="http://expert-themes.com/html/willies/admin/index.html">
											
											<div class="title"><h3>Location Info</h3></div>
											<div class="col-lg-12" id="popoverData" class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row">
			                                	
												
			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
													<label>You City*</label>
													
			                                        <select class="custom-select-box">
		                                                <option>Select Location</option>
		                                                <option>New York</option>
		                                                <option>Los Angeles</option>
		                                                <option>Chicago</option>
		                                                <option>Houston</option>
													</select>
											
			                                    </div>

			                                  

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                       <label >Your Town*</label>
			                                        <select class="custom-select-box">
			                                            <option>Nothing Select</option>
			                                            <option>Sale</option>
			                                        </select>
												</div>
												<div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label>Address</label>
			                                         	<input type="text" name="text" placeholder="Address" required>
			                                        </div>
												</div>
											</div>
											</div>
											
											<div class="title"><h3>Property Gallery</h3></div>
											<div class="col-lg-12" id="popoverData1" class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
											</div>
											</div>
											<div class="title"><h3>Basic Info</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <label>Title For Your Add*</label>
													<input type="text" name="text" placeholder="Property Title" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Item Condition*</label>
			                                        <select class="custom-select-box"  >
		                                                <option>Item Condition</option>
		                                                <option>Brand New</option>
		                                                <option>Used</option>
		                                                
		                                            </select>
			                                    </div>
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>Beds*</label>
                                                        <select class="custom-select-box"  >
                                                            <option>Beds</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10+</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                            <label>Baths*</label>
                                                            <select class="custom-select-box"  >
                                                                    <option>Baths</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10+</option>
                                                                
                                                            </select>
                                                        </div>
			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Land Size *</label>
													<input type="text" name="text" placeholder="Land Size" required>
			                                    
                                                </div>
                                                 <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Unit*</label>
			                                        <select class="custom-select-box"  >
		                                                <option>Unit*</option>
		                                                <option>Perches</option>
		                                                <option>Acres</option>
		                                                
		                                            </select>
                                                </div>
                                                  <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>House Size*</label>
                                                            <input type="text" name="text" placeholder="House Size (sqft)" required>
                                                        
                                                        </div>
												<div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Rent per month *</label>
													<input type="text" name="text" placeholder="Pick a good price (LKR)" required>
			                                    </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 " style="padding-top: 40px">
					                                <div class="check-box">
					                                    <input type="checkbox" name="negotiable" id="service-1"> 
					                                    <label for="service-1">Negotiable</label>
					                                </div>
					                            </div>

			                                   

			                                  

			                                  

			                                   
			                                </div>


			                               

			                                
											<div class="title"><h3>Detailed Information</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                    	<textarea name="detail" placeholder="Detailed Information*"></textarea>
			                                    </div>
			                                </div>
			                                <div class="title"><h3>Contact Info</h3></div>
			                                <div class="row">
			                                	

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Phone</label>
			                                        <input type="text" name="phone" placeholder="Phone" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                    	<button type="submit" class="theme-btn btn-style-one"> Submit Property</button>
			                                    </div>
			                                </div>
			                            </form>
			                        </div>
	                    		</div><p>* are required</p>
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