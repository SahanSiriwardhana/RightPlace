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

Route::get('/', function () {
    return view('index');
});

Route::get('/what-we-do', function () {
    return view('about');
});

Route::get('/buy', 'BuyController@index');
Route::get('/buy/{id}' ,'BuyController@loadProperty');
Route::get('/buy/district/{id}' ,'BuyController@loadDistrict');
Route::get('/buy/town/{id}' ,'BuyController@loadTown');
Route::get('/buy/price/{id}' ,'BuyController@loadPrice');


Route::get('/rent', 'RentController@index');
Route::get('/rent/{id}' ,'RentController@loadProperty');
Route::get('/rent/district/{id}' ,'RentController@loadDistrict');
Route::get('/rent/town/{id}' ,'RentController@loadTown');
Route::get('/rent/price/{id}' ,'RentController@loadPrice');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/loginForm', function () {
    return view('login');
});



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
});

Route::get('/dashboard/sell', function () {
    return view('admin/sell-catgory');
});

Route::get('/dashboard/rent', function () {
    return view('admin/rent-category');
});

//----------rent--------------------
Route::get('/dashboard/land-rent', 'LandRentController@index');
Route::post('/save-land-rent','LandRentController@store' );


Route::get('/dashboard/house-rent', 'HouseRentController@index');
Route::post('/save-house-rent','HouseRentController@store' );

Route::get('/dashboard/apartment-rent', 'ApartmenetRentController@index');
Route::post('/save-apartment-rent','ApartmenetRentController@store' );

Route::get('/dashboard/holiday-short-rent', 'HolydayRentalController@index');
Route::post('/save-holyday-rental','HolydayRentalController@store' );
Route::get('/holyday_rentals/{id}','HolydayRentalController@show');
Route::get('/ad-approve-holyday/{id}','HolydayRentalController@approve');
Route::get('/holyday_rentals_delete/{id}','HolydayRentalController@destroy');

Route::get('/dashboard/commercial-rent', 'CommercialPropertyRentController@index');
Route::post('/save-commercial-rent','CommercialPropertyRentController@store' );

Route::get('/dashboard/portion-rooms-rent', 'RoomController@index');
Route::post('/save-room-rent','RoomController@store' );
Route::get('/rooms/{id}','RoomController@show');
Route::get('/ad-approve-room/{id}','RoomController@approve');
Route::get('/rooms_delete/{id}','RoomController@destroy');

Route::get('/dashboard/my-add', 'ShowAddController@my_add');
Route::get('/dashboard/published-add', 'ShowAddController@publishAds');
Route::get('/dashboard/pending-add', 'ShowAddController@pendingAds');
Route::get('/dashboard/approve-panel', 'ShowAddController@approveAd');



//-------sale-----------------
Route::get('/dashboard/land-sale', 'LandSaleController@index');
Route::post('/save-land-sale','LandSaleController@store' );
Route::get('/lands/{id}','LandSaleController@show');
Route::get('/ad-approve/{id}','LandSaleController@approve');
Route::get('/lands_delete/{id}','LandSaleController@destroy');

Route::get('/dashboard/house-sale', 'HouseSaleController@index');
Route::post('/save-house-sale','HouseSaleController@store' );
Route::get('/houses/{id}','HouseSaleController@show');
Route::get('/ad-approve-house/{id}','HouseSaleController@approve');
Route::get('/houses_delete/{id}','HouseSaleController@destroy');


Route::get('/dashboard/apartment-sale', 'ApartmenetSaleController@index');
Route::post('/save-apartment-sale','ApartmenetSaleController@store' );
Route::get('/apartments/{id}','ApartmenetSaleController@show');
Route::get('/ad-approve-apartment/{id}','ApartmenetSaleController@approve');
Route::get('/apartments_delete/{id}','ApartmenetSaleController@destroy');

Route::get('/dashboard/commercial-sale', 'CommercialPropertySaleController@index');
Route::post('/save-commercial-salehouses','CommercialPropertySaleController@store' );
Route::get('/commercial_properties/{id}','CommercialPropertySaleController@show');
Route::get('/ad-approve-com/{id}','CommercialPropertySaleController@approve');
Route::get('/commercial_properties_delete/{id}','CommercialPropertySaleController@destroy');

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