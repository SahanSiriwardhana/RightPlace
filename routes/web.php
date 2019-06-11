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

Route::get('/buy', function () {
    return view('buy-properties');
});

Route::get('/rent', function () {
    return view('rent-properties');
});

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

Route::get('/dashboard/portion-rooms-rent', function () {
    return view('admin/portion_rooms');
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

Route::get('/dashboard/land-rent', 'LandController@index');

Route::get('/dashboard/house-rent', function () {
    return view('admin/house');
});

Route::get('/dashboard/apartment-rent', function () {
    return view('admin/apartment');
});

Route::get('/dashboard/holiday-short-rent', function () {
    return view('admin/holiday_short_tearm');
});

Route::get('/dashboard/commercial-rent', function () {
    return view('admin/commercial');
});

Route::get('/dashboard/my-add', function () {
    return view('admin/my-add');
});


//-------sale-----------------
Route::get('/dashboard/land-sale', function () {
    return view('admin/land-sale');
});

Route::get('/dashboard/house-sale', function () {
    return view('admin/house-sale');
});

Route::get('/dashboard/apartment-sale', function () {
    return view('admin/apartment-sale');
});

Route::get('/dashboard/commercial-sale', function () {
    return view('admin/commercial-sale');
});

Route::get('/dashboard/video-upload', function () {
    return view('admin/video-upload');
});

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