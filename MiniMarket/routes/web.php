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
Route::get('/anasayfa', 'App\Http\Controllers\SiteController@getIndex')->name('site.getIndex');
Route::get('/blog', 'App\Http\Controllers\SiteController@getBlog')->name('site.getBlog');

Route::get('/categori', 'App\Http\Controllers\SiteController@getCategori')->name('site.getCategori');

Route::get('/meyve', 'App\Http\Controllers\SiteController@getMeyve')->name('site.getMeyve');
Route::get('/sebze', 'App\Http\Controllers\SiteController@getSebze')->name('site.getSebze');
Route::get('/eturunleri', 'App\Http\Controllers\SiteController@getEturunleri')->name('site.getEturunleri');
Route::get('/suturunleri', 'App\Http\Controllers\SiteController@getSuturunleri')->name('site.getSuturunleri');

