<?php
use App\Http\Controllers\Admin;
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

Artisan::call('storage:link');
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


//yacht methods
Route::namespace('Admin')->group(function(){
    Route::prefix('admin')->middleware(['auth', 'checkVendor'])->group(function () {

        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('/profile', 'AdminController@profile')->name('admin.profile');

        Route::get('/logout', 'LoginController@logout_admin')->name('admin.logout');

        Route::get('/yacht', 'YachtController@index')->name('admin.yacht');
        Route::get('/yacht/add', 'YachtController@add')->name('admin.yacht.add');
        Route::post('/yacht/store', 'YachtController@store')->name('admin.yacht.store');
        Route::get('/yacht/change/{id}', 'YachtController@change')->name('admin.yacht.change');
        Route::post('/yacht/update/{id}', 'YachtController@update')->name('admin.yacht.update');

        Route::get('/vendor', 'VendorController@index')->name('admin.vendor');
        Route::get('/vendor/edit/{id}', 'VendorController@edit')->name('admin.vendor.edit');
        Route::get('/vendor/activate/{id}', 'VendorController@activate')->name('admin.vendor.activate');
        Route::get('/vendor/yachts/{vendorId}', 'YachtController@by_vendor')->name('admin.vendor.yachts');

        Route::get  ('/product',                'ProductController@index')->name('admin.product');
        Route::get  ('/product/add',            'ProductController@add')->name('admin.product.add');
        Route::get  ('/product/edit/{id}',      'ProductController@edit')->name('admin.product.edit');
        Route::post ('/product/save',           'ProductController@save')->name('admin.product.save');
        Route::get  ('/product/yachts',      'ProductController@get_yachts')->name('admin.product.get_yachts');

        Route::get  ('/member',      'MemberController@index')->name('admin.member');
        Route::get  ('/member/{id}',      'MemberController@view')->name('admin.member.view');
        Route::post  ('/member/password',      'MemberController@change_password')->name('admin.member.change_password');


        Route::get  ('/reservation',                'ReservationController@index')->name('admin.reservation');
        Route::get  ('/reservation/{id}',                'ReservationController@view')->name('admin.reservation.view');

        //Events
        Route::get('/event',                  'EventController@index')->name('admin.event');
        Route::get('/event/create',           'EventController@create')->name('admin.event.create');
        Route::get('/event/edit/{event}',     'EventController@edit')->name('admin.event.edit');
        Route::post('/event/store',           'EventController@store')->name('admin.event.store');
        Route::post('/event/update/{event}',  'EventController@update')->name('admin.event.update');

        //Banners
        Route::get('/banner',                  'BannerController@index')->name('admin.banner');
        Route::get('/banner/edit',           'BannerController@edit')->name('admin.banner.edit');
        Route::post('/banner/save',           'BannerController@save')->name('admin.banner.save');
        Route::post('/banner/update',           'BannerController@update')->name('admin.banner.update');
        Route::get('/banner/events/{id}',           'BannerController@events')->name('admin.banner.events');
        Route::get('/banner/detach/{id}',           'BannerController@detach_event')->name('admin.banner.event_detach');
        Route::post('/banner/attach',           'BannerController@attach_event')->name('admin.banner.attach');


        //Feedbacks
        Route::get('/feedback',           'FeedbackController@index')->name('admin.feedback.index');

        Route::post('/feedback/save',           'FeedbackController@save')->name('admin.feedback.save');





    });

});

Route::namespace('Client')->group(function(){

    Route::prefix('client')->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::post('registration', 'HomeController@register')->name('register');
        Route::post('login', 'HomeController@login')->name('login');

        //vendors
        Route::prefix('vendor')->group(function () {
            Route::post('login', 'VendorController@login')->name('vendor_login');
            Route::get('register', 'VendorController@register')->name('vendor_register');
            Route::post('register/save', 'VendorController@store')->name('vendor_register_save');

        });

        //yachts
        Route::prefix('yacht')->group(function () {
            Route::get('/', 'YachtController@index')->name('admin.yacht.index');
        });
    });
});

//Route::namespace('Client')->group(function(){
//        Route::get('/',  'HomeController@index')->name('index');
//
//    Route::post('registration',  'HomeController@register')->name('register');
//    Route::post('login',         'HomeController@login')->name('login');
//
//    //vendors
//    Route::prefix('vendor')->group(function () {
//        Route::post('login',     'VendorController@login')->name('vendor_login');
//        Route::get('register',   'VendorController@register')->name('vendor_register');
//        Route::post('register/save',  'VendorController@store')->name('vendor_register_save');
//
//    });
//
//    //yachts
//    Route::prefix('yacht')->group(function () {
//        Route::get('/',  'YachtController@index')->name('admin.yacht.index');
//    });
//});


//    //yachts
//    Route::prefix('yacht')->group(function () {
//        Route::get('/',  [YachtController::class, 'index'])->name('admin.yacht.index');
//    });
//});
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


require __DIR__.'/mobile.php';