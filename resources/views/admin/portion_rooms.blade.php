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
							<h5>Sale -> Portion & Rooms</h5>
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
			                            <form method="post" action="/save-room-rent" enctype="multipart/form-data" id="formData" >
											{{ csrf_field() }}	
											<div class="title"><h3>Location Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Enter your location information" rel="popover" data-placement="right" data-original-title="Where are you?" data-trigger="hover">
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
											<div class="title"><h3>Basic Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Enter basic information about your property with smart price" rel="popover" data-placement="right" data-original-title="Basic information" data-trigger="hover">
												<div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <label>Property Title*</label>
													<input type="text" name="addTitle" placeholder="Property Title" required value="{{old('addTitle')}}" onkeyup="countChar2(this)">
													<div id="charNum2">50 characters allowed</div>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Item Type*</label>
			                                        <select class="custom-select-box"  name="itemType">
		                                                <option value="">Item Type</option>
		                                                <option value="Portion">Portion</option>
		                                                <option value="Annex">Annex</option>
		                                                <option value="House">House</option>
		                                                <option value="Apartments">Apartments</option>
		                                            </select>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Gender*</label>
			                                        <select class="custom-select-box" name="gender">
			                                            <option value="">Gender</option>
			                                            <option value="1">Men</option>
			                                            <option value="2">Women</option>
			                                            <option value="3">Unisex</option>
			                                        </select>
			                                    </div>
												<div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Rent per month *</label>
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

			                               

			                                

			                                <div class="title"><h3>Features (optional)</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Select multiple features
											" rel="popover" data-placement="right" data-original-title="Features" data-trigger="hover">	
												<div class="row">
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="air_condition" id="service-9" value="1"> 
															<label for="service-9">Air Conditioning</label>
														</div>
													</div>
	
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="alarm_system" id="service-2" value="1"> 
															<label for="service-2">Alarm System</label>
														</div>
													</div>
	
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="doorman" id="service-3" value="1"> 
															<label for="service-3">Doorman</label>
														</div>
													</div>
	
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="fire_place" id="service-4" value="1"> 
															<label for="service-4">Fireplace</label>
														</div>
													</div>
	
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="garden" id="service-5" value="1"> 
															<label for="service-5">Garden</label>
														</div>
													</div>
	
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="heaing_system" id="service-6" value="1"> 
															<label for="service-6">Heating System</label>
														</div>
													</div>
	
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="high_ceiling" id="service-7" value="1"> 
															<label for="service-7">High Ceiling</label>
														</div>
													</div>
	
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
														<div class="check-box">
															<input type="checkbox" name="car_park" id="service-8" value="1"> 
															<label for="service-8">Car Parking</label>
														</div>
													</div>
	
													
	
												</div>
												</div>
											<div class="title"><h3>Detailed Information</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Enter detailed information of your property 
											Mentioning other features, why you selling, other benefits and etc.
											(max 5000 characters)
											" rel="popover" data-placement="right" data-original-title="Add good description" data-trigger="hover">
									<div class="row">
													<!-- Form Group -->
													<div class="form-group col-lg-12">
														<textarea name="detailInfo" placeholder="Detailed Information*" required value="{{old('detailInfo')}}" onkeyup="countChar(this)"></textarea>
														<div id="charNum">5000 characters allowed</div>
													</div>
												</div>
												</div>
			                                <div class="title"><h3>Contact Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Working phone number is the most valuable asset of your advertisement." rel="popover" data-placement="right" data-original-title="Add phone number" data-trigger="hover">
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
				
	            <p class="copyright-text">© 2018 <a href="#">Expert Themes</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>
    

@endsection