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
							<h5>
								@if ($land->type==1)
									Sale
								@else
								Rent
								@endif
								 
								-> Land</h5>
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
										<form method="post" action="/update-land/{{$land->id}}" enctype="multipart/form-data" id="formData" >
											{{ csrf_field() }}
											<div class="title"><h3>Location Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Enter your location information" rel="popover" data-placement="right" data-original-title="Where are you?" data-trigger="hover">
												<div class="row">
			                                	
												
			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
													<label>Your City*</label>
													
			                                        <select class="" name="city" id="js-example-basic-single" required>
														<option value="">Select Location</option>
														@foreach ($districts as $district)
															<option value="{{$district->did}}" 
																@if ($district->did==$land->city)
																selected
																@endif
																>{{$district->dname}}</option>
														@endforeach
		                                                
		                       
													</select>
													@error('city')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
			                                    </div>

			                                  

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                       <label >Your Town*</label>
			                                        <select class="" name="town" id="loadcity" required>
			                                            <option value="">Select Your town</option>
			                                            
													</select>
													@error('town')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												
												<div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label>Address</label>
			                                         	<input type="text" name="address" placeholder="Address" value="{{$land->address}}">
														
													</div>
												</div>
											</div>
											</div>
											
											<div class="title"><h3>Property Gallery</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Images must be JPG or PNG format (max 5 MB)" rel="popover" data-placement="right" data-original-title="Add more photos to get more responses" data-trigger="hover">
												<div class="row" id="drop" data-id="/update-image-land" data-token="{{$land->id}}">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <div id="myDropZone1" class="dropzone dropzone-design" name="" >
														
				                                        <div class="dz-default dz-message"><span>  Image size should be lower than 2MB , Drop files here to upload</span></div>
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
			                                        <label>Title For Your Add*</label>
													<input type="text" name="addTitle" placeholder="Property Title" required value="{{$land->title}}" onkeyup="countChar2(this)">
													<div id="charNum2">50 characters allowed</div>
													@error('addTitle')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Item Type*</label>
			                                        <select class="custom-select-box"  name="itemType" >
		                                                <option value="">Item Type</option>
														<option value="Agricultural" 
														@if ($land->item_type=='Agricultural')
														selected
														@endif
														>Agricultural</option>
														<option value="Commercial"
														@if ($land->item_type=='Commercial')
														selected
														@endif
														>Commercial</option>
														<option value="Residential"
														@if ($land->item_type=='Residential')
														selected
														@endif
														>Residential</option>
														<option value="Other"
														@if ($land->item_type=='Other')
														selected
														@endif
														>Other</option>
													</select>
													
													@error('itemType')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Land Size *</label>
													<input type="text" name="landSize" placeholder="Land Size" required value="{{$land->land_size}}">
													
													<input type="hidden" name="type" required value="{{$land->type}}">
													@error('landSize')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
                                                </div>
                                                 <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Unit*</label>
			                                        <select class="custom-select-box" name="unit" >
		                                                <option value="">Unit*</option>
														<option value="Perches"
														@if ($land->land_size_type=='Perches')
														selected
														@endif
														>Perches</option>
														<option value="Acres"
														@if ($land->land_size_type=='Acres')
														selected
														@endif
														>Acres</option>
		                                            
													</select>
													@error('unit')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
			                                    </div>
												<div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Rent per month *</label>
													<input type="text" name="rentPerMonth" placeholder="Pick a good price (LKR)" required value="{{$land->rent_per_month}}">
													@error('rentPerMonth')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 " style="padding-top: 40px">
					                                <div class="check-box">
														<input type="checkbox" name="negotiable" id="service-1" value="1"
														@if ($land->negotiable=='1')
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
																@if ($land->electricity=='1')
																checked
																@endif> 
																<label for="service-20">Electricity</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_main_supply" id="service-21" value="1"
																@if ($land->water_supply_from_main_supply=='1')
																checked
																@endif> 
																<label for="service-21">Water Supply From Main Supply</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_well" id="service-22" value="1"
																@if ($land->water_supply_from_well=='1')
																checked
																@endif> 
																<label for="service-22">Water Supply from Well</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="seveage_system" id="service-23" value="1"
																@if ($land->seveage_system=='1')
																checked
																@endif> 
																<label for="service-23">Sevage System</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="septic_tank" id="service-24" value="1"
																
																@if ($land->septic_tank=='1')
																checked
																@endif> 
																<label for="service-24">Septic Tank</label>
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
			                                    	<textarea name="detailInfo" placeholder="Detailed Information*" required  onkeyup="countChar(this)">{{$land->description}}</textarea>
													<div id="charNum">5000 characters allowed</div>
												</div>
												@error('detailInfo')
													<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
											</div>
											<div class="title"><h3>Contact Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Working phone number is the most valuable asset of your advertisement." rel="popover" data-placement="right" data-original-title="Add phone number" data-trigger="hover">
												<div class="row">
			                                	

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Phone</label>
													<input type="text" name="phone" placeholder="Phone" required value="{{$land->phone}}">
													<div class="" style="color: red">Phone number should be 07XXXXXXXX format (Should be 10 digits)</div>
													@error('phone')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
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
							{{-- ================ --}}
						</div>
						
					</div>
					
				</div>
				
	            <p class="copyright-text">© 2019 <a href="/">RightPlace.lk | </a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>
    
@endsection