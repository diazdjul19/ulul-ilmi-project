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

Route::get('/', function () {
    return view('view_landingpage.index-landingpage');
});

Auth::routes();

// Membatasi Route yang di (false)
// Auth::routes([
//     'register' => false,
// ]);



// Start Routing Landing Page

    Route::get('/home-web', 'LandingpageController@index')->name('home-web');

    Route::get('/pendidikan-sdit-web', 'LandingpageController@pendidikan_sdit_web')->name('pendidikan-sdit-web');
    Route::get('/pendidikan-mts-web', 'LandingpageController@pendidikan_mts_web')->name('pendidikan-mts-web');
    Route::get('/pendidikan-ma-web', 'LandingpageController@pendidikan_ma_web')->name('pendidikan-ma-web');
    Route::get('/pendidikan-mdt-web', 'LandingpageController@pendidikan_mdt_web')->name('pendidikan-mdt-web');

    Route::get('/gallery-web', 'LandingpageController@gallery_web')->name('gallery-web');
    Route::get('/content-web', 'LandingpageController@content_web')->name('content-web');
    Route::get('/contact-web', 'LandingpageController@contact_web')->name('contact-web');


// End Routing Landing Page


// Start Routing Dashboard Admin & Operator

    Route::group(['middleware' => ['auth', 'cekleveluser:A,O']], function () {
        Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('user', 'UserController');
        Route::post('/edit-password-store-ao', 'UserController@edit_password_store_ao')->name('edit-password-store-ao');
        Route::post('/select-delete-user', 'UserController@select_delete_user')->name('select-delete-user');
        Route::get('user/active/{id}', "UserController@user_active")->name("user.active");
        Route::get('user/not-active/{id}', "UserController@user_not_active")->name("user.not-active");
    });

// End Routing Dashboard Admin & Operator


// Start Routing Dashboard Admin
    Route::group(['middleware' => ['auth', 'cekleveluser:A']], function () {
        // Start Route Ct Home
            Route::get('/ct-home', 'CtHomeController@index')->name('ct-home');

            Route::get('/ct-home-create-md5tob/{MD5_text_on_bgimg}', 'CtHomeController@ct_home_create_md5tob')->name('ct-home-create-md5tob');
            Route::get('/ct-home-create-md5ts/{MD5_text_sambutan}', 'CtHomeController@ct_home_create_md5ts')->name('ct-home-create-md5ts');
            Route::get('/ct-home-create-md5tcb/{MD5_text_content_berita}', 'CtHomeController@ct_home_create_md5tcb')->name('ct-home-create-md5tcb');
            Route::post('/ct-home-store-default', 'CtHomeController@ct_home_store_default')->name('ct-home-store-default');

            Route::get('/ct-home-create-custom', 'CtHomeController@ct_home_create_custom')->name('ct-home-create-custom');
            Route::post('/ct-home-store-custom', 'CtHomeController@ct_home_store_custom')->name('ct-home-store-custom');

            Route::get('/ct-home-edit/{id}', 'CtHomeController@ct_home_edit')->name('ct-home-edit');
            Route::put('/ct-home-update/{id}', 'CtHomeController@ct_home_update')->name('ct-home-update');

            Route::get('/ct-home-delete/{id}',"CtHomeController@ct_home_delete")->name("ct-home-delete");
        // End Route Ct Home

        //Start Route Ct Pendidikan
            Route::get('/ct-pdd-sdit', 'CtPendidikanController@ct_pdd_sdit')->name('ct-pdd-sdit');
            Route::get('/ct-pdd-mts', 'CtPendidikanController@ct_pdd_mts')->name('ct-pdd-mts');
            Route::get('/ct-pdd-ma', 'CtPendidikanController@ct_pdd_ma')->name('ct-pdd-ma');
            Route::get('/ct-pdd-mdt', 'CtPendidikanController@ct_pdd_mdt')->name('ct-pdd-mdt');

            Route::get('/ct-pdd-sdit-create-default', 'CtPendidikanController@ct_pdd_create_default')->name('ct-pdd-sdit-create-default');
            Route::get('/ct-pdd-mts-create-default', 'CtPendidikanController@ct_pdd_create_default')->name('ct-pdd-mts-create-default');
            Route::get('/ct-pdd-ma-create-default', 'CtPendidikanController@ct_pdd_create_default')->name('ct-pdd-ma-create-default');
            Route::get('/ct-pdd-mdt-create-default', 'CtPendidikanController@ct_pdd_create_default')->name('ct-pdd-mdt-create-default');
            Route::post('/ct-pdd-store-default', 'CtPendidikanController@ct_pdd_store_default')->name('ct-pdd-store-default');

            Route::get('/ct-pdd-sdit-create-custom', 'CtPendidikanController@ct_pdd_create_custom')->name('ct-pdd-sdit-create-custom');
            Route::get('/ct-pdd-mts-create-custom', 'CtPendidikanController@ct_pdd_create_custom')->name('ct-pdd-mts-create-custom');
            Route::get('/ct-pdd-ma-create-custom', 'CtPendidikanController@ct_pdd_create_custom')->name('ct-pdd-ma-create-custom');
            Route::get('/ct-pdd-mdt-create-custom', 'CtPendidikanController@ct_pdd_create_custom')->name('ct-pdd-mdt-create-custom');
            Route::post('/ct-pdd-store-custom', 'CtPendidikanController@ct_pdd_store_custom')->name('ct-pdd-store-custom');
            
            Route::get('/ct-pdd-sdit-edit/{id}', 'CtPendidikanController@ct_pdd_edit')->name('ct-pdd-sdit-edit');
            Route::get('/ct-pdd-mts-edit/{id}', 'CtPendidikanController@ct_pdd_edit')->name('ct-pdd-mts-edit');
            Route::get('/ct-pdd-ma-edit/{id}', 'CtPendidikanController@ct_pdd_edit')->name('ct-pdd-ma-edit');
            Route::get('/ct-pdd-mdt-edit/{id}', 'CtPendidikanController@ct_pdd_edit')->name('ct-pdd-mdt-edit');
            Route::put('/ct-pdd-update/{id}', 'CtPendidikanController@ct_pdd_update')->name('ct-pdd-update');

            Route::get('/ct-pdd-delete/{id}',"CtPendidikanController@ct_pdd_delete")->name("ct-pdd-delete");
        // End Route Ct Pendidikan

    });
// END Routing Dashboard Admin


