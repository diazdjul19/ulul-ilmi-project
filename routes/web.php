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

// Route::get('/', function () {
//     return view('view_landingpage.index-landingpage');
// });
Route::get('/', 'LandingpageController@index');


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
    
    Route::get('/info-ppdb-web', 'LandingpageController@info_ppdb_web')->name('info-ppdb-web');
    

    Route::get('/logreg-creator', 'LandingpageController@logreg_creator')->name('logreg-creator');
    Route::post('/regist-creator', 'LandingpageController@regist_creator')->name('regist-creator');
    Route::post('/login-store-creator', 'LandingpageController@login_store_creator')->name('login-store-creator');

// End Routing Landing Page


// Start Routing DashbaordCreator

    Route::group(['middleware' => ['backtoalldashboard']], function () {
        // 
    });
    
    Route::group(['middleware' => ['firewalldbcreator']], function () {
        Route::get('/home-creator', 'DashboardCreator@index')->name('home-creator');
        Route::get('/logout-creator', 'DashboardCreator@logout_creator')->name('logout-creator');
    });

        
    

// End Routing DashbaordCreator




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
        
        // Start Route Ct Gallery
            Route::get('/ct-gallery-sdit', 'CtGalleryController@ct_gallery_sdit')->name('ct-gallery-sdit');
            Route::get('/ct-gallery-mts', 'CtGalleryController@ct_gallery_mts')->name('ct-gallery-mts');
            Route::get('/ct-gallery-ma', 'CtGalleryController@ct_gallery_ma')->name('ct-gallery-ma');
            Route::get('/ct-gallery-mdt', 'CtGalleryController@ct_gallery_mdt')->name('ct-gallery-mdt');
            Route::get('/ct-gallery-other', 'CtGalleryController@ct_gallery_other')->name('ct-gallery-other');

            Route::post('/ct-gallery-store', 'CtGalleryController@ct_gallery_store')->name('ct-gallery-store');

            Route::put('/ct-gallery-update/{id}', 'CtGalleryController@ct_gallery_update')->name('ct-gallery-update');

            Route::get('/ct-gallery-delete/{id}',"CtGalleryController@ct_gallery_delete")->name("ct-gallery-delete");
        // End Route Ct Gallery

        // Start Routing Ct Contact
            Route::resource('/ct-contact', 'CtContactController');
        // End ROuting Ct Contact

        // Start Route Ct Content
            Route::get('/ct-creator', 'CtContentController@ct_creator')->name('ct-creator');
            Route::post('/ct-creator-store', 'CtContentController@ct_creator_store')->name('ct-creator-store');
            Route::get('/ct-creator-edit/{id}', 'CtContentController@ct_creator_edit')->name('ct-creator-edit');
            Route::put('/ct-creator-update/{id}', 'CtContentController@ct_creator_update')->name('ct-creator-update');
            Route::get('/ct-creator-delete/{id}', 'CtContentController@ct_creator_delete')->name('ct-creator-delete');

            Route::get('/ct-creator/active/{id}', "CtContentController@ct_creator_active")->name("ct-creator.active");
            Route::get('/ct-creator/not-active/{id}', "CtContentController@ct_creator_not_active")->name("ct-creator.not-active");

            Route::get('/ct-content', 'CtContentController@ct_content')->name('ct-content');

        // End Route Ct Content

        // Start Route Ct Info Pendaftaran
            Route::resource('/ct-info-ppdb', 'CtInfoPendaftaran');
            Route::get('/ct-info-ppdb/active/{id}', "CtInfoPendaftaran@ct_info_ppdb_active")->name("ct-info-ppdb.active");
            Route::get('/ct-info-ppdb/not-active/{id}', "CtInfoPendaftaran@ct_info_ppdb_not_active")->name("ct-info-ppdb.not-active");
            Route::get('ct-info-ppdb/delete/{id}',"CtInfoPendaftaran@destroy")->name("ct-info-ppdb.destroy");
        // End Route Ct Info Pendaftaran
    });
// END Routing Dashboard Admin