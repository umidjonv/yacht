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