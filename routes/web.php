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
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// no auth
    //info loker
    Route::get('/info_loker', 'noAuthFrontendController@info_loker')->name('info_loker');

// use auth
    // update_profil
    Route::get('/update_profil', 'FrontendController@update_profil')->name('update_profil');

    // jobs admin
    Route::get('/page_post_a_jobs', 'FrontendController@page_post_a_jobs')->name('page_post_a_jobs');
    Route::get('/index_a_jobs', 'FrontendController@index_a_jobs')->name('index_a_jobs');
    Route::get('/store_jobs', 'FrontendController@store_jobs')->name('store_jobs');
    Route::get('/edit_jobs/{id}', 'FrontendController@edit_jobs')->name('edit_jobs');
    Route::get('/update_jobs/{id}', 'FrontendController@update_jobs')->name('update_jobs');

    //dashboard admin
    Route::get('/page_dashboard_sortcut', 'FrontendController@page_dashboard_sortcut')->name('page_dashboard_sortcut');

    // users
    Route::get('/page_users', 'FrontendController@page_users')->name('page_users');
 

