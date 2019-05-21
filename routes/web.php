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

Route::get('/property-detail', function () {
    return view('property-detail');
});

Route::get('/dashboard/add-post', function () {
    return view('admin/submit-property');
});
