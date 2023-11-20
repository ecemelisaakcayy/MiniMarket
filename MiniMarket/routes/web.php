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
Route::get('/meyve-ekle', 'App\Http\Controllers\SiteController@getCreateMeyve')->name('site.getCreateMeyve');
Route::post('/meyve-ekle', 'App\Http\Controllers\SiteController@postCreateMeyve')->name('site.postCreateMeyve');

Route::get('/sebze-goruntule', 'App\Http\Controllers\SiteController@getSebze')->name('site.getSebze');
Route::get('/sebze-ekle', 'App\Http\Controllers\SiteController@getCreateSebze')->name('site.getCreateSebze');
Route::post('/sebze-ekle', 'App\Http\Controllers\SiteController@postCreateSebze')->name('site.postCreateSebze');

Route::get('/eturunleri', 'App\Http\Controllers\SiteController@getEturunleri')->name('site.getEturunleri');
Route::get('/et-ekle', 'App\Http\Controllers\SiteController@getCreateEt')->name('site.getCreateEt');
Route::post('/et-ekle', 'App\Http\Controllers\SiteController@postCreateEt')->name('site.postCreateEt');

Route::get('/suturunleri', 'App\Http\Controllers\SiteController@getSuturunleri')->name('site.getSuturunleri');
Route::get('/sut-ekle', 'App\Http\Controllers\SiteController@getCreateSut')->name('site.getCreateSut');
Route::post('/sut-ekle', 'App\Http\Controllers\SiteController@postCreateSut')->name('site.postCreateSut');

