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

            Route::get('/product/list/{area}/{sort}', 'ProductController@list')->name('client.mobile.product.list');
            Route::get('/product/view/{id}', 'ProductController@view')->name('client.mobile.product.view');
            Route::get('/product/my', 'ProductController@my')->name('client.mobile.product.my');
            Route::get('/product/reserved', 'ProductController@list')->name('client.mobile.product.reserved');

            Route::get('/reservation/prepare/{id}', 'ReservationController@prepare')->name('client.mobile.reservation.prepare');
            Route::post('/reservation/save', 'ReservationController@save')->name('client.mobile.reservation.save');
            Route::get('/reservation/times', 'ReservationController@get_times')->name('client.mobile.reservation.get_times');
            Route::get('/reservation/payment/{id}', 'ReservationController@payment')->name('client.mobile.reservation.payment');

        });
    });
    Route::group(['prefix' => 'client'], function(){
        Route::prefix('mobile')->group(function () {
            Route::get('/login', 'LoginController@index')->name('client.mobile.login');
            Route::post('/attempt', 'LoginController@attempt')->name('client.mobile.login.attempt');
            Route::get('/register1', 'LoginController@register1')->name('client.mobile.register1');
            Route::get('/register2', 'LoginController@register2')->name('client.mobile.register2');
            Route::post('/register2', 'LoginController@register2_complete')->name('client.mobile.register2_complete');
            Route::get('/register3', 'LoginController@register3')->name('client.mobile.register3');
        });
    });
});