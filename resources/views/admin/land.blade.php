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
							<h5>Rent -> Land</h5>
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
										<form method="post" action="/save-land-rent" enctype="multipart/form-data" id="formData" >
											{{ csrf_field() }}
											<div class="title"><h3>Location Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Enter Location Information" data-trigger="hover">
			                                <div class="row">
			                                	
												
			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
													<label>Your City*</label>
													
			                                        <select class="" name="city" id="js-example-basic-single" required>
														<option value="">Select Location</option>
														@foreach ($districts as $district)
															<option value="{{$district->did}}">{{$district->dname}}</option>
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
			                                        <div id="myDropZone1" class="dropzone dropzone-design" name="" >
														
				                                        <div class="dz-default dz-message"><span>  Image size should be lower than 2MB , Drop files here to upload</span></div>
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
													@error('addTitle')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Item Type*</label>
			                                        <select class="custom-select-box"  name="itemType" >
		                                                <option value="">Item Type</option>
		                                                <option value="Agricultural">Agricultural</option>
		                                                <option value="Commercial">Commercial</option>
														<option value="Residential">Residential</option>
														<option value="Industrial">Industrial</option>
		                                                <option value="Leasure">Leasure</option>
		                                                <option value="Other">Other</option>
													</select>
													
													@error('itemType')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Land Size *</label>
													<input type="text" name="landSize" placeholder="Land Size" required value="{{old('landSize')}}">
													@error('landSize')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
                                                </div>
                                                 <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Unit*</label>
			                                        <select class="custom-select-box" name="unit" >
		                                                <option value="">Unit*</option>
		                                                <option value="Perches">Perches</option>
		                                                <option value="Acres">Acres</option>
		                                            
													</select>
													@error('unit')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
			                                    </div>
												<div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Rent per month *</label>
													<input type="text" name="rentPerMonth" placeholder="Pick a good price (LKR)" required value="{{old('rentPerMonth')}}">
													@error('rentPerMonth')
													<div class="alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 " style="padding-top: 40px">
					                                <div class="check-box">
					                                    <input type="checkbox" name="negotiable" id="service-1" value="1"> 
					                                    <label for="service-1">Negotiable</label>
					                                </div>
					                            </div>

			                                   

			                                  

			                                  

			                                   
			                                </div>
											</div>

											<div class="title"><h3>Features </h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
											<div class="row">
													<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="electricity" id="service-20" value="1"> 
																<label for="service-20">Electricity</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_main_supply" id="service-21" value="1"> 
																<label for="service-21">Water Supply From Main Supply</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_well" id="service-22" value="1"> 
																<label for="service-22">Water Supply from Well</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="seveage_system" id="service-23" value="1"> 
																<label for="service-23">Sevage System</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="septic_tank" id="service-24" value="1"> 
																<label for="service-24">Septic Tank</label>
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
												@error('detailInfo')
													<div class="alert alert-danger">{{ $message }}</div>
												@enderror
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