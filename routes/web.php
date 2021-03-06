<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','indexController@index');

Route::get('/what-we-do', function () {
    return view('about');
});

Route::get('/buy', 'BuyController@index');
Route::get('/buy/{id}' ,'BuyController@loadProperty');
Route::get('/buy/district/{id}' ,'BuyController@loadDistrict');
Route::get('/buy/town/{id}' ,'BuyController@loadTown');
Route::get('/buy/price/{id}' ,'BuyController@loadPrice');
Route::get('/apartment', 'BuyController@apartmentFetch');
Route::get('/holyday-and-short-tearm', 'BuyController@holydayFetch');
Route::get('/house', 'BuyController@houseFetch');


Route::get('/rent', 'RentController@index');
Route::get('/rent/{id}' ,'RentController@loadProperty');
Route::get('/rent/district/{id}' ,'RentController@loadDistrict');
Route::get('/rent/town/{id}' ,'RentController@loadTown');
Route::get('/rent/price/{id}' ,'RentController@loadPrice');

Route::get('/contact', function () {
    return view('contact');
});

//Contact Form submit
Route::post('contactFormSubmit',[
    'uses' => 'contactFormSubmit@submitForm',
    'as'=>'contactFormSubmit'
]);

Route::get('loginForm' ,['uses'=> 'UserController@showLoginForm','as'=>'loginForm']);




Route::get('logout',[
    'uses' => 'UserController@LogOut',
    'as'=>'logout'
]);
    

Route::post('signup',[
    'uses' => 'UserController@RegisterUser',
    'as'=>'signup'
]);

Route::post('signin',[
    'uses' => 'UserController@LoginUser',
    'as'=>'signin'
]);
//password reset

Route::get('/resetPwForm', function () {
    return view('resetPasswordForm');
});

Route::post('resetpw',[
    'uses' => 'UserController@ResetPassword',
    'as'=>'resetpw'
]);


Route::post('popupsubmit',[
    'uses' => 'UserController@ContactFormSubmit',
    'as'=>'popupsubmit'
]);
// Auth::routes();
Route::get('password/reset/{token?}','UserController@showResetForm');
// Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');
// Route::post('password/reset','Auth\ResetPasswordController@reset');


Route::post('resetpwfromEmail',[
    'uses' => 'UserController@resetpwfromEmail',
    'as'=>'resetpwfromEmail'
]);

Route::get('login/google',['uses'=> 'UserController@redirectToProvider','as'=>'googleLogin']);
Route::get('login/google/callback', 'UserController@handleProviderCallback');


Route::get('login/facebook',['uses'=> 'UserController@redirectToProviderFacebook','as'=>'fblogin']);
Route::get('login/facebook/callback', 'UserController@handleProviderCallbackFacebook');
Route::get('login/facebook',['uses'=> 'UserController@redirectToProviderFacebook','as'=>'fblogin']);

Route::get('my-ads',['uses'=>'UserController@getMyAds','as'=>'myAds'])->middleware('auth');



Route::get('/property-detail', function () {
    return view('property-detail');
});



Route::get('/dashboard/add-type', function () {
    return view('admin/add-type');
})->middleware('auth');

Route::get('/dashboard/sell', function () {
    return view('admin/sell-catgory');
})->middleware('auth');

Route::get('/dashboard/rent', function () {
    return view('admin/rent-category');
})->middleware('auth');

//----------rent--------------------
Route::get('/dashboard/land-rent', 'LandRentController@index')->middleware('auth');
Route::post('/save-land-rent','LandRentController@store' );
Route::get('/lands_edit/{id}','LandRentController@edit')->middleware('auth');
Route::post('/image-fetch-land','LandRentController@fetchImage');
Route::post('/image-delete-land', 'LandRentController@destroyImage');
Route::post('/update-image-land','LandRentController@storeUpdateImage' );
Route::post('/update-land/{id}','LandRentController@update' );

Route::get('/dashboard/house-rent', 'HouseRentController@index')->middleware('auth');
Route::post('/save-house-rent','HouseRentController@store' );
Route::get('/houses_edit/{id}','HouseRentController@edit')->middleware('auth');
Route::post('/image-fetch-house','HouseRentController@fetchImage');
Route::post('/image-delete-house', 'HouseRentController@destroyImage');
Route::post('/update-image-house','HouseRentController@storeUpdateImage' );
Route::post('/update-house/{id}','HouseRentController@update' );

Route::get('/dashboard/apartment-rent', 'ApartmenetRentController@index')->middleware('auth');
Route::post('/save-apartment-rent','ApartmenetRentController@store' );
Route::get('/apartments_edit/{id}','ApartmenetRentController@edit')->middleware('auth');
Route::post('/image-fetch-apartment','ApartmenetRentController@fetchImage');
Route::post('/image-delete-apartment', 'ApartmenetRentController@destroyImage');
Route::post('/update-image-apartment','ApartmenetRentController@storeUpdateImage' );
Route::post('/update-apartment/{id}','ApartmenetRentController@update' );

Route::get('/dashboard/holiday-short-rent', 'HolydayRentalController@index')->middleware('auth');
Route::post('/save-holyday-rental','HolydayRentalController@store' );
Route::get('/holyday_rentals/{id}','HolydayRentalController@show');
Route::get('/ad-approve-holyday/{id}','HolydayRentalController@approve');
Route::get('/holyday_rentals_delete/{id}','HolydayRentalController@destroy');
Route::get('/holyday_rentals_edit/{id}','HolydayRentalController@edit')->middleware('auth');
Route::post('/image-fetch-holyday-rental','HolydayRentalController@fetchImage');
Route::post('/image-delete-holyday-rental', 'HolydayRentalController@destroyImage');
Route::post('/update-image-holyday-rental','HolydayRentalController@storeUpdateImage' );
Route::post('/update-holyday-rental/{id}','HolydayRentalController@update' );


Route::get('/dashboard/commercial-rent', 'CommercialPropertyRentController@index')->middleware('auth');
Route::post('/save-commercial-rent','CommercialPropertyRentController@store' );
Route::get('/commercial_properties_edit/{id}','CommercialPropertyRentController@edit')->middleware('auth');
Route::post('/image-fetch-commercial-property','CommercialPropertyRentController@fetchImage');
Route::post('/image-delete-commercial-property', 'CommercialPropertyRentController@destroyImage');
Route::post('/update-image-commercial-property','CommercialPropertyRentController@storeUpdateImage' );
Route::post('/update-commercial-property/{id}','CommercialPropertyRentController@update' );


Route::get('/dashboard/portion-rooms-rent', 'RoomController@index')->middleware('auth');
Route::post('/save-room-rent','RoomController@store' );
Route::get('/rooms/{id}','RoomController@show');
Route::get('/ad-approve-room/{id}','RoomController@approve');
Route::get('/rooms_delete/{id}','RoomController@destroy');
Route::get('/rooms_edit/{id}','RoomController@edit')->middleware('auth');
Route::post('/image-fetch-room','RoomController@fetchImage');
Route::post('/image-delete-room', 'RoomController@destroyImage');
Route::post('/update-image-room','RoomController@storeUpdateImage' );
Route::post('/update-room/{id}','RoomController@update' );

Route::get('/dashboard/my-add', 'ShowAddController@my_add')->middleware('auth');
Route::get('/dashboard/published-add', 'ShowAddController@publishAds')->middleware('auth');
Route::get('/dashboard/pending-add', 'ShowAddController@pendingAds')->middleware('auth');
Route::get('/dashboard/approve-panel', 'ShowAddController@approveAd');

Route::get('/real-estate-news', 'EstateNewsController@index2');
Route::get('/news/{id}','EstateNewsController@show');
//Admin Routes
Route::middleware('can:isAdmin')->group(function() {
    Route::get('/dashboard/all-users','UserController@allUsers');
    
    //------------upload home video--------------------------
    Route::get('/dashboard/video-upload', 'HomeVideoController@index');
    Route::post('/save-video','HomeVideoController@store' );
    Route::get('/video-fetch','HomeVideoController@fetchVideo' );
    Route::delete('/video-delete/{id}', 'HomeVideoController@destroy');

    //---------------upload featured project
    Route::get('/dashboard/featured-project-upload', 'FeaturedProjectController@index');
    Route::post('/save-image','FeaturedProjectController@store' );
    Route::get('/image-fetch','FeaturedProjectController@fetchProject' );
    Route::delete('/image-delete/{id}', 'FeaturedProjectController@destroy');

    //---------------estate news
    Route::get('/dashboard/estate-news', 'EstateNewsController@index');
    Route::post('/save-estate-news','EstateNewsController@store' );
    Route::get('/image-fetch','EstateNewsController@fetchProject' );
    Route::delete('/image-delete/{id}', 'EstateNewsController@destroy');
    Route::get('/commercial_properties_edit/{id}','EstateNewsController@edit');
    //approve ads
    Route::get('/dashboard/approve-panel', 'ShowAddController@approveAd');

});
// Route::get('/dashboard/all-users','UserController@allUsers');

//my-account route
Route::get('/dashboard/my-account', 'UserController@myAccount')->middleware('auth');
//update user details
Route::post('/update-userDetails/{id}','UserController@updateUserDetails');
//delete user
Route::get('/dashboard/deleteUser/{id}', 'UserController@deleteUser');

//-------sale-----------------
Route::get('/dashboard/land-sale', 'LandSaleController@index')->middleware('auth');
Route::post('/save-land-sale','LandSaleController@store' );
Route::get('/lands/{id}','LandSaleController@show');
Route::get('/ad-approve/{id}','LandSaleController@approve');
Route::get('/lands_delete/{id}','LandSaleController@destroy');


Route::get('/dashboard/house-sale', 'HouseSaleController@index')->middleware('auth');
Route::post('/save-house-sale','HouseSaleController@store' );
Route::get('/houses/{id}','HouseSaleController@show');
Route::get('/ad-approve-house/{id}','HouseSaleController@approve');
Route::get('/houses_delete/{id}','HouseSaleController@destroy');


Route::get('/dashboard/apartment-sale', 'ApartmenetSaleController@index')->middleware('auth');
Route::post('/save-apartment-sale','ApartmenetSaleController@store' );
Route::get('/apartments/{id}','ApartmenetSaleController@show');
Route::get('/ad-approve-apartment/{id}','ApartmenetSaleController@approve');
Route::get('/apartments_delete/{id}','ApartmenetSaleController@destroy');

Route::get('/dashboard/commercial-sale', 'CommercialPropertySaleController@index')->middleware('auth');
Route::post('/save-commercial-sale','CommercialPropertySaleController@store' );
Route::get('/commercial_properties/{id}','CommercialPropertySaleController@show');
Route::get('/ad-approve-com/{id}','CommercialPropertySaleController@approve');
Route::get('/commercial_properties_delete/{id}','CommercialPropertySaleController@destroy');




//------advice-----------------
Route::get('/buyers-advice', function () {
    return view('buyers-advice');
});

Route::get('/renter-advice', function () {
    return view('renter-advice');
});

Route::get('/seller-advice', function () {
    return view('seller-advice');
});

Route::get('/landlord-advice', function () {
    return view('landlord-advice');
});

//------------------fetch data from city-----------
Route::post('loadCity/fetch', 'CityController@fetchCity')->name('loadCity.fetch');