<?php


Route::namespace('Admin')->group(function(){
    Route::prefix('admin')->group(function () {
        Route::prefix('mobile')->group(function () {
            Route::get('/', 'AdminController@mobile_index')->name('admin.mobile.index');
            Route::get('/login', 'LoginController@index')->name('admin.mobile.login.index');
            Route::post('/attempt', 'LoginController@attempt')->name('admin.mobile.login.attempt');
            Route::get('/logout', 'LoginController@logout')->name('admin.mobile.login.logout');


            Route::get('/vendor/edit/{id}', 'VendorController@edit')->name('admin.mobile.vendor.edit');
            Route::post('/vendor/save', 'VendorController@save_mobile')->name('admin.mobile.vendor.save');


        });
    });

});

Route::namespace('Client')->group(function(){
    Route::group(['prefix' => 'client', 'middleware' => ['redirectIfNotAuthenticated']], function(){
        Route::prefix('mobile')->group(function () {
            Route::get('/', 'HomeController@mobile_index')->name('client.mobile.index');
            Route::post('/attempt', 'LoginController@attempt')->name('client.mobile.login.attempt');
            Route::get('/logout', 'LoginController@logout')->name('client.mobile.login.logout');

            Route::get('/yacht/list', 'YachtController@list')->name('client.mobile.yacht.list');


        });
    });
    Route::group(['prefix' => 'client'], function(){
        Route::prefix('mobile')->group(function () {
            Route::get('/login', 'LoginController@index')->name('client.mobile.login');
            Route::get('/register1', 'LoginController@register1')->name('client.mobile.register1');
            Route::get('/register2', 'LoginController@register2')->name('client.mobile.register2');
            Route::post('/register2', 'LoginController@register2_complete')->name('client.mobile.register2_complete');
            Route::get('/register3', 'LoginController@register3')->name('client.mobile.register3');
        });
    });
});