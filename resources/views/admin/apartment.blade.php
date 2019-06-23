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
							<h5>Rent -> Apartment</h5>
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
			                            <form method="post" action="/save-apartment-rent" enctype="multipart/form-data" id="formData" >
											{{ csrf_field() }}
											<div class="title"><h3>Location Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Enter Location Information" data-trigger="hover">
			                                <div class="row">
			                                	
												
			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
													<label>You City*</label>
													
													<select class="" name="city" id="js-example-basic-single" required>
														<option value="">Select Location</option>
														@foreach ($districts as $district)
															<option value="{{$district->did}}">{{$district->dname}}</option>
														@endforeach
		                                                
		                       
													</select>
											
			                                    </div>

			                                  

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                       <label >Your Town*</label>
												   <select class="" name="town" id="loadcity" required>
													<option value="">Select Your town</option>
													
												</select>
												</div>
												<div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label>Address</label>
														<input type="text" name="address" placeholder="Address" value="{{old('address')}}">
			                                        </div>
												</div>
											</div>
											</div>
											
											<div class="title"><h3>Property Gallery</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone1" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
											</div>
											</div>
											<div class="title"><h3>Basic Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <label>Title For Your Add*</label>
													<input type="text" name="addTitle" placeholder="Property Title" required value="{{old('addTitle')}}" onkeyup="countChar2(this)">
													<div id="charNum2">50 characters allowed</div>
			                                    </div>

			                                    
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>Beds*</label>
														<select class="custom-select-box"  name="beds" >
                                                            <option value="">Beds</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10*">10+</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                            <label>Baths*</label>
                                                            <select class="custom-select-box"  name="baths" >
																<option value="">Beds</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10*">10+</option>
															</select>
                                                        </div>
			                                   
                                               
                                                  <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>House Size*</label>
														<input type="text" name="houseSize" placeholder="House Size (sqft)" required value="{{old('houseSize')}}">
                                                        
                                                        </div>
												<div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Price *</label>
													<input type="text" name="rentPerMonth" placeholder="Pick a good price (LKR)" required value="{{old('rentPerMonth')}}">
			                                    </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 " style="padding-top: 40px">
					                                <div class="check-box">
					                                    <input type="checkbox" name="negotiable" id="service-1" value="1"> 
					                                    <label for="service-1">Negotiable</label>
					                                </div>
					                            </div>

			                                   

			                                  

			                                  

			                                   
			                                </div>
											</div>

			                               

			                                
											<div class="title"><h3>Detailed Information</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
											<div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
													<textarea name="detailInfo" placeholder="Detailed Information*" required value="{{old('detailInfo')}}" onkeyup="countChar(this)"></textarea>
													<div id="charNum">5000 characters allowed</div>
			                                    </div>
											</div>
											</div>
											<div class="title"><h3>Contact Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row">
			                                	

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Phone</label>
			                                        <input type="text" name="phone" placeholder="Phone" required value="{{old('phone')}}">
													<div class="" style="color: red">Phone number should be 07XXXXXXXX format (Should be 10 digits)</div>
												
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                    	<button type="submit" class="theme-btn btn-style-one" id="submit"> Submit Property</button>
			                                    </div>
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