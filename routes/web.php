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
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('page/index');
    });
    Route::get('/test', 'testController@test');
    Route::any('/home', 'AdminController@home')->name('home');
    Route::any('/merchants', 'AdminController@merchants')->name('merchants');
	Route::any('/branchs', 'AdminController@branchs')->name('branchs');
	Route::any('/campaigns', 'AdminController@Campaigns')->name('campaigns');
    Route::post('addMerchants', 'AdminController@addMerchants')->name('addMerchants');
    Route::post('addBranchs', 'AdminController@addBranchs')->name('addBranchs');
    Route::post('addCampaigns', 'AdminController@addCampaigns')->name('addCampaigns');
    
});