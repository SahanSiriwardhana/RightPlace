@extends('admin.layout.main-nav4')
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
							<div class="col-md-6 col-sm-12"><h4>Edit Property</h4><br>
							<h5>@if ($holydayRental->type==1)
									Sale
								@else
								Rent
								@endif -> Holiday and Short Term Rental</h5>
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
			                            <form method="post" action="/update-holyday-rental/{{$holydayRental->id}}" enctype="multipart/form-data" id="formData" >
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
																<option value="{{$district->did}}"
																		@if ($district->did==$holydayRental->city)
																		selected
																		@endif
																	>{{$district->dname}}</option>
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
															<input type="text" name="address" placeholder="Address" value="{{$holydayRental->address}}">
														</div>
													</div>
												</div>
												</div>
											<div class="title"><h3>Property Gallery</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Images must be JPG or PNG format (max 5 MB)" rel="popover" data-placement="right" data-original-title="Add more photos to get more responses" data-trigger="hover">
												<div class="row" id="drop" data-id="/update-image-holyday-rental" data-token="{{$holydayRental->id}}">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone1" class="dropzone dropzone-design">
				                                        <div class="dz-default dz-message"><span>Click here to upload images</span></div>
				                                    </div>
			                                    </div>
											</div>
											<div class="row" id="fetchImage" style="margin: -20px 0 10px 0" >
												
												</div>
											</div>
											<div class="title"><h3>Basic Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Enter basic information about your property with smart price" rel="popover" data-placement="right" data-original-title="Basic information" data-trigger="hover">
												<div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <label>Property Title*</label>
													<input type="text" name="addTitle" placeholder="Property Title" required value="{{$holydayRental->title}}" onkeyup="countChar2(this)">
													<div id="charNum2">50 characters allowed</div>
			                                    </div>

			                                

			                                   
												
			                                   
												<div class="form-group col-lg-6 col-md-6 col-sm-12">
														<label>Rate Per Person Per Night BB *</label>
														<input type="text" name="rentPerMonth" placeholder="Pick a good price (LKR)" required value="{{$holydayRental->rent_per_month}}">
													</div>
													
													<div class="form-group col-lg-6 col-md-6 col-sm-12">
															<label>Rate Per Person Per Night HB </label>
															<input type="text" name="ratePerPersonHB" placeholder="Pick a good price (LKR)"  value="{{$holydayRental->ratePerPersonHB}}">
													</div>
	
													<div class="form-group col-lg-6 col-md-6 col-sm-12">
															<label>Rate Per Person Per Night FB</label>
															<input type="text" name="ratePerPersonFB" placeholder="Pick a good price (LKR)"  value="{{$holydayRental->ratePerPersonFB}}">
													</div>
	
	
													<div class="form-group col-lg-6 col-md-6 col-sm-12">
															<label>Rate (Double Basis) Per Night BB </label>
															<input type="text" name="rateBB" placeholder="Pick a good price (LKR)"  value="{{$holydayRental->rateBB}}">
														</div>
														
														<div class="form-group col-lg-6 col-md-6 col-sm-12">
																<label>Rate (Double Basis) Per Night HB </label>
																<input type="text" name="rateHB" placeholder="Pick a good price (LKR)"  value="{{$holydayRental->rateHB}}">
														</div>
		
														<div class="form-group col-lg-6 col-md-6 col-sm-12">
																<label>Rate (Double Basis) Per Night FB</label>
																<input type="text" name="rateFB" placeholder="Pick a good price (LKR)"  value="{{$holydayRental->rateFB}}">
														</div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 " style="padding-top: 40px">
					                                <div class="check-box">
														<input type="checkbox" name="negotiable" id="service-1" value="1"
														@if ($holydayRental->negotiable=='1')
														checked
														@endif
														 > 
					                                    <label for="service-1">Negotiable</label>
					                                </div>
					                            </div>

			                                   

			                                  

			                                  

			                                   
			                                </div>
											</div>

											<div class="title"><h3>Features </h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Select multiple features
											" rel="popover" data-placement="right" data-original-title="Features" data-trigger="hover">	
										<div class="row">
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="electricity" id="service-20" value="1"
																@if ($holydayRental->electricity=='1')
																checked
																@endif> 
																<label for="service-20">Electricity</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_main_supply" id="service-21" value="1"
																@if ($holydayRental->water_supply_from_main_supply=='1')
																checked
																@endif> 
																<label for="service-21">Water Supply From Main Supply</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_well" id="service-22" value="1"
																@if ($holydayRental->water_supply_from_well=='1')
																checked
																@endif> 
																<label for="service-22">Water Supply from Well</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="seveage_system" id="service-23" value="1"
																@if ($holydayRental->seveage_system=='1')
																checked
																@endif> 
																<label for="service-23">Sevage System</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="septic_tank" id="service-24" value="1"
																
																@if ($holydayRental->septic_tank=='1')
																checked
																@endif> 
																<label for="service-24">Septic Tank</label>
															</div>
														</div>
		
											</div>
											</div>

			                                

											<div class="title"><h3>Features (optional)</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Select optional features
											" rel="popover" data-placement="right" data-original-title="Features" data-trigger="hover">	
												<div class="row">
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="free_wifi" id="service-9" value="1"
																	@if ($holydayRental->free_wifi=='1')
																	checked
																	@endif
																	> 
																	<label for="service-9">Free WiFi</label>
																</div>
															</div>
			
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="free_parking" id="service-2" value="1"
																	@if ($holydayRental->free_parking=='1')
																	checked
																	@endif
																	> 
																	<label for="service-2">Free Parking</label>
																</div>
															</div>
			
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="attached_bahroom" id="service-3" value="1"
																	@if ($holydayRental->attached_bahroom=='1')
																	checked
																	@endif
																	> 
																	<label for="service-3">Attached Bathroom</label>
																</div>
															</div>
			
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="hot_water" id="service-4" value="1"
																	@if ($holydayRental->hot_water=='1')
																	checked
																	@endif
																	> 
																	<label for="service-4">Hot Water</label>
																</div>
															</div>
			
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="ac" id="service-5" value="1"
																	@if ($holydayRental->ac=='1')
																	checked
																	@endif
																	> 
																	<label for="service-5">A/C</label>
																</div>
															</div>
			
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="private_balcony" id="service-6" value="1"
																	@if ($holydayRental->private_balcony=='1')
																	checked
																	@endif
																	> 
																	<label for="service-6">Private Balcony</label>
																</div>
															</div>
			
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="beach_natural_view" id="service-7" value="1"
																	@if ($holydayRental->beach_natural_view=='1')
																	checked
																	@endif
																	> 
																	<label for="service-7">Beach / Natural View</label>
																</div>
															</div>
			
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																<div class="check-box">
																	<input type="checkbox" name="bar" id="service-8" value="1"
																	@if ($holydayRental->bar=='1')
																	checked
																	@endif
																	> 
																	<label for="service-8">Bar</label>
																</div>
															</div>
															
															
															<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																	<div class="check-box">
																		<input type="checkbox" name="swimming_pool" id="service-12" value="1"
																		@if ($holydayRental->swimming_pool=='1')
																		checked
																		@endif
																		> 
																		<label for="service-12">Swimming Pool</label>
																	</div>
																</div>
				
																<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																	<div class="check-box">
																		<input type="checkbox" name="fitness_center" id="service-10" value="1"
																		@if ($holydayRental->fitness_center=='1')
																		checked
																		@endif
																		> 
																		<label for="service-10">Fitness Center</label>
																	</div>
																</div>
				
																<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
																	<div class="check-box">
																		<input type="checkbox" name="outdoor_activities" id="service-11" value="1"
																		@if ($holydayRental->outdoor_activities=='1')
																		checked
																		@endif
																		> 
																		<label for="service-11">Outdoor Activities</label>
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
												<textarea name="detailInfo" placeholder="Detailed Information*" required onkeyup="countChar(this)">{{$holydayRental->description}}</textarea>
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
														<input type="text" name="phone" placeholder="Phone" required value="{{$holydayRental->phone}}">
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