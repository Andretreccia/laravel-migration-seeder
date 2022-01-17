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

Route::get('/', 'HomeController@index')->name('home');

Route::get('travel-package', 'TravelPackageController@index')->name('travels');
Route::get('travel-package/{travel}', 'TravelPackageController@show')->name('travel');


Route::get('news', 'PostController@index')->name('news');
Route::get('news/{post}', 'PostController@index')->name('post');