<?php


Route::namespace('Admin')->group(function(){
    Route::group(['prefix'=> 'admin', 'middleware' => ['redirectIfNotAuthenticated', 'checkVendor']], function () {
        Route::prefix('mobile')->group(function () {
            Route::get('/', 'AdminController@mobile_index')->name('admin.mobile.index');


            Route::get('/logout', 'LoginController@logout')->name('admin.mobile.login.logout');


            Route::get('/vendor/edit/{id}', 'VendorController@edit')->name('admin.mobile.vendor.edit');
            Route::post('/vendor/save', 'VendorController@save_mobile')->name('admin.mobile.vendor.save');

            // Route::prefix('product')->group(['as' => 'admin.mobile.','namespace'=>'Mobile'],function () {
            //     Route::get('/', 'ProductMobileController@index')->name('product.index');
            //     Route::get('/create', 'ProductMobileController@create')->name('product.create');
            //     Route::post('/store', 'ProductMobileController@store')->name('product.store');
            //     Route::get('/getYacht', 'ProductMobileController@getYacht')->name('product.getyacht');
            //     Route::get('/edit/{id}', 'ProductMobileController@edit')->name('admin.mobile.product.edit');
            // });



            Route::group(["as" => "admin.mobile.", "namespace"=> "Mobile"], function () {
                Route::group(["prefix" => "yacht", "as" => "yacht."], function() {
                    Route::get("", ["as" => "index", "uses" => "YachtController@index"]);
                    Route::get("register", ["as" => "register", "uses" => "YachtController@register"]);
                    Route::post("save", ["as" => "save", "uses" => "YachtController@save"]);
                    Route::get("edit/{yacht}", ["as" => "edit", "uses" => "YachtController@edit"]);
                    Route::put("update/{yacht}", ["as" => "update", "uses" => "YachtController@update"]);
                });
                Route::group(["prefix" => "product", "as" => "product."], function() {
                    Route::get('/', 'ProductMobileController@index')->name('index');
                    Route::get('/create', 'ProductMobileController@create')->name('create');
                    Route::post('/store', 'ProductMobileController@store')->name('store');
                    Route::get('/getYacht', 'ProductMobileController@getYacht')->name('getyacht');
                    Route::get('/edit/{id}', 'ProductMobileController@edit')->name('edit');
                    Route::post('/removeImage', 'ProductMobileController@removeImage')->name('removeImage');
                    Route::post('/update/{id}', 'ProductMobileController@update')->name('update');
                    Route::post('/destroy/{id}', 'ProductMobileController@destroy')->name('destroy');
                });
                Route::group(["prefix"  => "reservation", "as" => "reservation."], function() {
                    Route::get("", ["as" => "index", "uses" => "ReservationController@index"]);
                    Route::get("show/{reservation}", ["as" => "show", "uses" => "ReservationController@show"]);
                    Route::get("confirm/{reservation}", ["as" => "confirm", "uses" => "ReservationController@confirm"]);
                    Route::get("cancel/{reservation}", ["as" => "cancel", "uses" => "ReservationController@cancel"]);
                });

            });

        });
    });
    Route::group(['prefix'=> 'admin'], function () {
        Route::prefix('mobile')->group(function () {
            Route::get('/login', 'LoginController@index')->name('admin.mobile.login.index');
            Route::post('/attempt', 'LoginController@attempt')->name('admin.mobile.login.attempt');
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


            Route::get('/reservation/list/', 'ReservationController@list')->name('client.mobile.reservation.list');
            Route::get('/reservation/view/{id}', 'ReservationController@view')->name('client.mobile.reservation.view');
            Route::get('/product/favourite/{id}', 'ProductController@set_favourite')->name('client.mobile.product.set_favourite');
            Route::get('/product/favourite/remove/{id}', 'ProductController@remove_favourite')->name('client.mobile.product.remove_favourite');

            Route::get('/feedback/add/{id}', 'FeedbackController@add')->name('client.mobile.feedback.add');
            Route::post('/feedback/save', 'FeedbackController@save')->name('client.mobile.feedback.save');

            Route::get('/event/{id}', 'EventController@view')->name('client.mobile.event.view');

            Route::get('/payment/{id}', 'PaymentController@index')->name('client.mobile.payment.index');
            Route::post('/payment/complete', 'PaymentController@complete')->name('client.mobile.payment.complete');
            Route::post('/payment/success', 'PaymentController@success')->name('client.mobile.payment.success');



        });
    });
    Route::group(['prefix' => 'client'], function(){
        Route::prefix('mobile')->group(function () {
            Route::get('/login', 'LoginController@index')->name('client.mobile.login');
            Route::get('/logout', 'LoginController@logout')->name('client.mobile.logout');
            Route::post('/attempt', 'LoginController@attempt')->name('client.mobile.login.attempt');
            Route::get('/register1', 'LoginController@register1')->name('client.mobile.register1');
            Route::get('/register2', 'LoginController@register2')->name('client.mobile.register2');
            Route::post('/register2', 'LoginController@register2_complete')->name('client.mobile.register2_complete');
            Route::get('/register3', 'LoginController@register3')->name('client.mobile.register3');
        });
    });
});