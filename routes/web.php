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



Route::post('login','LoginController@login');
Route::get('login','LoginController@showLogin')->name('login');

    Route::get('/', function () {
        return view('home');
    })->name('/');
    Route::post('logout','LoginController@logout')->name('logout');
    Route::post('dashboard','LoginController@logout')->name('dashboard');

    Route::resource('contact-informations', 'ContactInformationController');

    Route::get('contact-lists','HomeController@contaactLists')->name('contact-lists');
