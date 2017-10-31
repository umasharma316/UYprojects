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

Route::get('home', function () {
    return view('index');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contactus', function () {
    return view('contactus');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
Route::get('services', function () {
    return view('services');
});

Route::match(array('GET', 'POST'), '/savemessage', array(
            'as'    =>  'savemessage',
            'uses'  =>  'HomeController@savemessage'
));
