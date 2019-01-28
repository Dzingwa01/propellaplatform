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
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
/**
 * Users Controller
 */
Route::get('create-incubatee','IncubateeController@create');
Route::post('incubatee-store','IncubateeController@store')->name('incubatee.store');
Route::post('incubatee-update/{incubatee}','IncubateeController@update');

Route::get('/incubatee/delete/{incubatee}','IncubateeController@destroy');

Route::resource('users','UsersController');
Route::get('incubatees','UsersController@incubateesIndex');
Route::get('mentors','UsersController@mentorsIndex');

Route::get('get-users','UsersController@getUsers')->name('get-users');
Route::get('get-incubatees','UsersController@getIncubatees')->name('get-incubatees');
Route::get('get-mentors','UsersController@getMentors')->name('get-mentors');

Route::get('/user/delete/{user}','UsersController@destroy');
Route::get('account-activation/{user}','RegisterController@verifyEmail');
Route::get('user-profile','UsersController@getUserProfile');
Route::get('clerk-profile','UsersController@getUserProfile');


Route::get('/Home/Incubatees','HomeController@getIncubatees');
Route::get('/Home/ICTVentures','HomeController@getIncubatees');
Route::get('/Home/INDVentures','HomeController@getIndustrial');

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
Route::get('/Home/Founders/{incubatee}','HomeController@getFounder');
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
Route::get('/Home/SmartCity','HomeController@getSmartCity');

Route::get('/Incubatees/List','HomeController@getIncubatees');

Route::get('/Home/FreeCourse',function(){
    return view('home.smart_city');
});