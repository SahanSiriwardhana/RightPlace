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


Route::post('register',[
    'uses' => 'UserController@RegisterUser',
    'as'=>'signup'
]);

Route::post('login',[
    'uses' => 'UserController@LoginUser',
    'as'=>'signin'
]);

Route::get('login/google',['uses'=> 'UserController@redirectToProvider','as'=>'googleLogin']);
Route::get('login/google/callback', 'UserController@handleProviderCallback');


Route::get('login/facebook',['uses'=> 'UserController@redirectToProviderFacebook','as'=>'fblogin']);
Route::get('login/facebook/callback', 'UserController@handleProviderCallbackFacebook');


Route::get('my-ads',['uses'=>'UserController@getMyAds','as'=>'myAds'])->middleware('auth');



Route::get('/property-detail', function () {
    return view('property-detail');
});

Route::get('/dashboard/portion_rooms', function () {
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

Route::get('/dashboard/land', function () {
    return view('admin/land');
});
Route::get('/dashboard/house', function () {
    return view('admin/house');
});

Route::get('/dashboard/apartment', function () {
    return view('admin/apartment');
});

Route::get('/dashboard/holiday-short', function () {
    return view('admin/holiday_short_tearm');
});

Route::get('/dashboard/commercial', function () {
    return view('admin/commercial');
});

Route::get('/dashboard/my-add', function () {
    return view('admin/my-add');
});