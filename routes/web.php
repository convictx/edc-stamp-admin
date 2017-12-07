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
    //Route::get('/test', 'testController@test');
    //Route::any('/home', 'AdminController@home')->name('home');
    //Route::any('/merchants', 'AdminController@merchants')->name('merchants');
	//Route::any('/branchs', 'AdminController@branchs')->name('branchs');
    //Route::get('/campaigns', 'CampaignController@index')->name('campaigns');
    
    //Route::post('addMerchants', 'AdminController@addMerchants')->name('addMerchants');
    //Route::post('addBranchs', 'AdminController@addBranchs')->name('addBranchs');
    

    ### Dashboard ###
    Route::resource('dashboards', 'DashboardController');
    Route::get('/dashboard/data', 'DashboardController@getData');

    ### Merchant ###
    Route::resource('merchants', 'MerchantController');
    Route::get('/merchant/data', 'MerchantController@getData');

    ### Branch ###
    Route::resource('branchs', 'BranchController');
    Route::get('/branch/data', 'BranchController@getData');

    ### Campaign ###
    Route::resource('campaigns', 'CampaignController');
    Route::get('/campaign/data', 'CampaignController@getData');

    ### Banner ###
    Route::resource('banners', 'BannerController');
    Route::get('/banner/data', 'BannerController@getData');

    ### Stamp ###
    Route::resource('stamps', 'StampController');
    Route::get('/stamp/data', 'StampController@getData');

    ### History ###
    Route::resource('historys', 'HistoryController');
    Route::get('/history/data', 'HistoryController@getData');

    ### User ###
    Route::resource('users', 'UserController');
    Route::get('/user/data', 'UserController@getData');

    ### User Group ###
    Route::resource('users_group', 'UserGroupController');
    Route::get('/user_group/data', 'UserGroupController@getData');

    ### Report ###
    Route::resource('reports', 'ReportController');
    Route::get('/report/data', 'ReportController@getData');

    ### Log ###
    Route::resource('logs', 'LogController');
    Route::get('/log/data', 'LogController@getData');

});