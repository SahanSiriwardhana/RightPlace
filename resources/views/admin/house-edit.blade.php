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
							<h5>@if ($house->type==1)
									Sale
								@else
								Rent
								@endif -> House</h5>
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
			                            <form method="post" action="/update-house/{{$house->id}}" enctype="multipart/form-data" id="formData">
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
															<option value="{{$district->did}}" 
																	@if ($district->did==$house->city)
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
			                                         	<input type="text" name="address" placeholder="Address" value="{{$house->address}}" >
			                                        </div>
												</div>
											</div>
											</div>
											
											<div class="title"><h3>Property Gallery</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row" id="drop" data-id="/update-image-house" data-token="{{$house->id}}">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
													<div id="myDropZone1" class="dropzone dropzone-design" name="">
				                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				                                    </div>
			                                    </div>
											</div>
											<div class="row" id="fetchImage" style="margin: -20px 0 10px 0" >
												
												</div>
											</div>
											<div class="title"><h3>Basic Info</h3></div>
											<div class="col-lg-12 popoverDat"  class="btn" href="#" data-content="Popover with data-trigger" rel="popover" data-placement="right" data-original-title="Title" data-trigger="hover">
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
			                                        <label>Title For Your Add*</label>
													<input type="text" name="addTitle" placeholder="Property Title" value="{{$house->title}}" onkeyup="countChar2(this)">
													<div id="charNum2">50 characters allowed</div>
												</div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Item Condition*</label>
			                                        <select class="custom-select-box"  name="itemCondition">
		                                                <option value="">Item Condition</option>
														<option value="Brand New" 
														@if ($house->item_condition=='Brand New')
														selected
														@endif
														>Brand New</option>
														<option value="Used" 
														@if ($house->item_condition=='Used')
														selected
														@endif
														>Used</option>
		                                                
		                                            </select>
												</div>
												<div class="form-group col-lg-4 col-md-6 col-sm-12">
														<label>Item Type*</label>
														<select class="custom-select-box"  name="itemType">
															<option value="">Item Type</option>
															<option value="Single Storied Houses" @if ($house->item_type=='Single Storied Houses')
																	selected
																	@endif>Single Storied Houses</option>
															<option value="Two Storied Houses"  @if ($house->item_type=='Two Storied Houses')
																	selected
																	@endif>Two Storied Houses</option>
															<option value="Above Two Storied Houses"  @if ($house->item_type=='Above Two Storied Houses')
																	selected
																	@endif>Above Two Storied Houses</option>
															<option value="Annexes"  @if ($house->item_type=='Annexes')
																	selected
																	@endif>Annexes</option>
															<option value="Banglows"  @if ($house->item_type=='Banglows')
																	selected
																	@endif>Banglows</option>
															<option value="Villas"  @if ($house->item_type=='Villas')
																	selected
																	@endif>Villas</option>
															
														</select>
													</div>
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>Bedrooms*</label>
                                                        <select class="custom-select-box"  name="beds" >
                                                            <option value="" >Bedrooms</option>
															<option value="1" @if($house->beds=='1') selected @endif>1</option>
															<option value="2" @if($house->beds=='2') selected @endif>2</option>
                                                            <option value="3" @if($house->beds=='3') selected @endif>3</option>
                                                            <option value="4" @if($house->beds=='4') selected @endif>4</option>
                                                            
                                                            <option value="5" @if($house->beds=='5') selected @endif>5</option>
                                                            <option value="6" @if($house->beds=='6') selected @endif>6</option>
                                                            <option value="7" @if($house->beds=='7') selected @endif>7</option>
                                                            <option value="8" @if($house->beds=='8') selected @endif>8</option>
                                                            <option value="9" @if($house->beds=='9') selected @endif>9</option>
                                                            <option value="10*" @if($house->beds=='10*') selected @endif>10+</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                            <label>Baths*</label>
                                                            <select class="custom-select-box"  name="baths">
																	<option value="">Baths</option>
																	<option value="1" @if($house->baths=='1') selected @endif>1</option>
																	<option value="2" @if($house->baths=='2') selected @endif>2</option>
																	<option value="3" @if($house->baths=='3') selected @endif>3</option>
																	<option value="4" @if($house->baths=='4') selected @endif>4</option>
																	
																	<option value="5" @if($house->baths=='5') selected @endif>5</option>
																	<option value="6" @if($house->baths=='6') selected @endif>6</option>
																	<option value="7" @if($house->baths=='7') selected @endif>7</option>
																	<option value="8" @if($house->baths=='8') selected @endif>8</option>
																	<option value="9" @if($house->baths=='9') selected @endif>9</option>
																	<option value="10*" @if($house->baths=='10*') selected @endif>10+</option>
                                                                
                                                            </select>
                                                        </div>
			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Land Size *</label>
													<input type="text" name="landSize" placeholder="Land Size" required value="{{$house->land_size}}">
			                                    
                                                </div>
                                                 <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
			                                        <label>Unit*</label>
			                                        <select class="custom-select-box" name="unit" >
		                                                <option value="">Unit*</option>
														<option value="Perches" 
														@if ($house->land_size_type=='Perches')
														selected
														@endif
														>Perches</option>
														<option value="Acres" 
														@if ($house->land_size_type=='Acres')
														selected
														@endif
														>Acres</option>
		                                            
													</select>
                                                </div>
                                                  <!-- Form Group -->
			                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>House Size*</label>
                                                            <input type="text" name="houseSize" placeholder="House Size (sqft)" required value="{{$house->house_size}}">
															<input type="hidden" name="type" required value="{{$house->type}}">
                                                        </div>
												<div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label>Rent per month *</label>
													<input type="text" name="rentPerMonth" placeholder="Pick a good price (LKR)" required value="{{$house->rent_per_month}}">
			                                    </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 " style="padding-top: 40px">
					                                <div class="check-box">
					                                    <input type="checkbox" name="negotiable" id="service-1" value="1" @if ($house->negotiable=='1')
														checked
														@endif> 
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
																<input type="checkbox" name="electricity" id="service-20" value="1"
																@if ($house->electricity=='1')
																checked
																@endif> 
																<label for="service-20">Electricity</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_main_supply" id="service-21" value="1"
																@if ($house->water_supply_from_main_supply=='1')
																checked
																@endif> 
																<label for="service-21">Water Supply From Main Supply</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="water_supply_from_well" id="service-22" value="1"
																@if ($house->water_supply_from_well=='1')
																checked
																@endif> 
																<label for="service-22">Water Supply from Well</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="seveage_system" id="service-23" value="1"
																@if ($house->seveage_system=='1')
																checked
																@endif> 
																<label for="service-23">Sevage System</label>
															</div>
														</div>
		
														<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
															<div class="check-box">
																<input type="checkbox" name="septic_tank" id="service-24" value="1"
																
																@if ($house->septic_tank=='1')
																checked
																@endif> 
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
			                                    	<textarea name="detailInfo" placeholder="Detailed Information*" required onkeyup="countChar(this)">{{$house->description}}</textarea>
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
			                                        <input type="text" name="phone" placeholder="Phone" required value="{{$house->phone}}">
													<div class="" style="color: red">Phone number should be 07XXXXXXXX format (Should be 10 digits)</div>
												
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                    	<button type="submit" class="theme-btn btn-style-one"  id="submit"> Submit Property</button>
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