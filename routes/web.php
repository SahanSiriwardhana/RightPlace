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

Route::get('/dashboard/add-post', function () {
    return view('admin/submit-property');
});
