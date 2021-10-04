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


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// no auth
    //info loker
    Route::get('/', 'noAuthFrontendController@index');

// use auth
    // backend
    // update_profil
    Route::get('/update_profil', 'homeController@update_profil')->name('update_profil');

    
    //dashboard admin
    Route::get('/page_dashboard_sortcut', 'homeController@page_dashboard_sortcut')->name('page_dashboard_sortcut');
    // jobs admin
    Route::get('/page_post_a_jobs', 'homeController@page_post_a_jobs')->name('page_post_a_jobs');
    Route::get('/index_a_jobs', 'homeController@index_a_jobs')->name('index_a_jobs');
    Route::get('/store_jobs', 'homeController@store_jobs')->name('store_jobs');
    Route::get('/edit_jobs/{id}', 'homeController@edit_jobs')->name('edit_jobs');
    Route::get('/update_jobs/{id}', 'homeController@update_jobs')->name('update_jobs');
    Route::get('/delete_jobs/{id}', 'homeController@delete_jobs')->name('delete_jobs');
    Route::get('/view_peserta/{id}', 'homeController@view_peserta')->name('view_peserta');

    // users
    Route::get('/page_users', 'homeController@page_users')->name('page_users');
    Route::get('json_users','homeController@json_users');

    // pengumuman test
    Route::get('pengumuman_test','homeController@pengumuman_test');


    // frontend
    // page_profil_user
    Route::get('/page_profil_user', 'frontendController@page_profil_user')->name('page_profil_user');
    Route::get('/page_edit_profil', 'frontendController@page_edit_profil')->name('page_edit_profil');
    Route::get('/page_add_profil', 'frontendController@page_add_profil')->name('page_add_profil');
    Route::post('/storeProfilUser', 'frontendController@storeProfilUser')->name('storeProfilUser');
    Route::post('/editProfilUser/{id}', 'frontendController@editProfilUser')->name('editProfilUser');

    // job_user
    Route::get('/pageDetailJob/{id}', 'noAuthFrontendController@pageDetailJob')->name('pageDetailJob');
    Route::get('/daftar/{id}', 'frontendController@daftar')->name('daftar');

    // media
    Route::get('/media_bkk', 'noAuthFrontendController@media_bkk')->name('media_bkk');


    // chat
    Route::get('/chat', 'noAuthFrontendController@chat')->name('chat');

    // pengaturan
    Route::get('/pengaturan', 'noAuthFrontendController@pengaturan')->name('pengaturan');
