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


Auth::routes();

//user-dashboard
Route::namespace('UserDashboard')->prefix('user-dashboard')->middleware('auth')->group(function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('verification', 'VerificationController@index')->name('verification.index');
    Route::post('verification/sms/{mobileCode?}', 'VerificationController@sms')->name('verification.sms');
    // Route::resource('ads', 'UserController');


});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/best', 'HomeController@best')->name('best');
Route::get('/ads', 'HomeController@ads')->name('ads');
Route::get('/ads/{id}/show', 'HomeController@singleAds')->name('ads.show');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/{id}/show', 'HomeController@singleBlog')->name('blog.show');



