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

// Route::get('/', function () {
//     return view('welcome');
// });
//view the landing page 
Route:: get('home','HomeController@index')->name('home');

// call me form
Route::post('callMe','CallMeController@callMe')->name('callMe');

//contactus form
Route::post('contactUs','ContactUsController@contactUs')->name('contactUs');