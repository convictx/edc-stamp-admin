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
   
	Route::any('/branchs', 'AdminController@branchs')->name('branchs');
    Route::post('addBranchs', 'AdminController@addBranchs')->name('addBranchs');
    
	Route::any('merchants', 'MerchantController@index')->name('merchants');
	Route::post('addMerchants', 'MerchantController@addMerchants')->name('addMerchants');
    Route::get('/campaigns', 'CampaignController@index')->name('campaigns');
    Route::post('addCampaigns', 'CampaignController@addCampaigns')->name('addCampaigns');
    
});