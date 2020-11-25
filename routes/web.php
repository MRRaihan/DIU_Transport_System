<?php

use Illuminate\Support\Facades\Route;

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

// *******Frontend Routes*******//
Route::group([], function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('schedule','ScheduleController@schedule')->name('schedule');
    Route::get('service','ServiceController@service')->name('service');
    Route::get('transportinfo','ServiceController@transportinfo')->name('transportinfo');
    Route::get('maps','FacilitiesController@locate')->name('maps');
    Route::get('cityroute','FacilitiesController@cityroute')->name('cityroute');
    Route::get('developers','InfoController@developers')->name('developers');
    Route::get('gallery','GalleryController@gallery')->name('gallery');
    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('post/{id}/details','BlogController@details')->name('post.details');
    Route::get('contact','ContactController@contact')->name('contact');
    Route::get('profile','UserController@profile')->name('profile');
    Route::get('ticket_list','UserController@ticketlist')->name('ticket_list');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

/*Route::get('/home', 'HomeController@index')->name('home');*/

// *******Admin Panel Routes*******//

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'auth'], function (){
    Route::get('dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('user', 'UserController');
    Route::resource('slider', 'SliderController');
    Route::resource('video', 'VideoController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');
    Route::resource('service', 'ServiceController');
    Route::resource('bus_category', 'BusCategoryController');
    Route::resource('route', 'RouteController');
    Route::resource('bus', 'BusController');
    Route::resource('stuff', 'StuffController');
});
