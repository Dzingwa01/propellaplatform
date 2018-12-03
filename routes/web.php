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
//    dd("Hello");
    return view('welcome');
});
Route::get('/Home/About',function(){
    return view('home.about');
});
Route::get('/Home/Partners',function(){
    return view('home.partners');
});

Route::get('/Home/Calendar',function(){
    return view('home.calendar');
});

Route::get('/Home/Innovators',function(){
    return view('home.innovators');
});

Route::get('/Home/Categories',function(){
    return view('home.categories');
});

Route::get('/Home/Programs',function(){
    return view('home.programs');
});
Route::get('/Home/SmartCity',function(){
    return view('home.smart_city');
});
Route::get('/Home/Founders',function(){
    return view('home.founders');
});
Route::get('/Home/Funding',function(){
    return view('home.funding');
});
Route::get('/Home/Innovators',function(){
    return view('home.innovators');
});
Route::get('/Home/Partners',function(){
    return view('home.partners');
});
Route::get('/Home/Opportunity',function(){
    return view('home.opportunity');
});
Route::get('/Home/SmartCity',function(){
    return view('home.smart_city');
});

Route::get('/Home/FreeCourse',function(){
    return view('home.smart_city');
});