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
Route::get('/categori-ekle', 'App\Http\Controllers\SiteController@getCreateCategori')->name('site.getCreateCategori');
Route::post('/categori-ekle', 'App\Http\Controllers\SiteController@postCreateCategori')->name('site.postCreateCategori');
Route::get('/categori-duzenle', 'App\Http\Controllers\SiteController@getEditCategori')->name('site.getEditCategori');
Route::post('/categori-duzenle', 'App\Http\Controllers\SiteController@postEditCategori')->name('site.postEditCategori');

Route::get('/meyve', 'App\Http\Controllers\SiteController@getMeyve')->name('site.getMeyve');
Route::get('/meyve-ekle', 'App\Http\Controllers\SiteController@getCreateMeyve')->name('site.getCreateMeyve');
Route::post('/meyve-ekle', 'App\Http\Controllers\SiteController@postCreateMeyve')->name('site.postCreateMeyve');
Route::get('/meyve-duzenle', 'App\Http\Controllers\SiteController@getEditMeyve')->name('site.getEditMeyve');
Route::post('/meyve-duzenle', 'App\Http\Controllers\SiteController@postEditMeyve')->name('site.postEditMeyve');

Route::get('/sebze', 'App\Http\Controllers\SiteController@getSebze')->name('site.getSebze');
Route::get('/sebze-ekle', 'App\Http\Controllers\SiteController@getCreateSebze')->name('site.getCreateSebze');
Route::post('/sebze-ekle', 'App\Http\Controllers\SiteController@postCreateSebze')->name('site.postCreateSebze');
Route::get('/sebze-duzenle', 'App\Http\Controllers\SiteController@getEditSebze')->name('site.getEditSebze');
Route::post('/sebze-duzenle', 'App\Http\Controllers\SiteController@postEditSebze')->name('site.postEditSebze');

Route::get('/et', 'App\Http\Controllers\SiteController@getEt')->name('site.getEt');
Route::get('/et-ekle', 'App\Http\Controllers\SiteController@getCreateEt')->name('site.getCreateEt');
Route::post('/et-ekle', 'App\Http\Controllers\SiteController@postCreateEt')->name('site.postCreateEt');
Route::get('/et-duzenle', 'App\Http\Controllers\SiteController@getEditEt')->name('site.getEditEt');
Route::post('/et-duzenle', 'App\Http\Controllers\SiteController@postEditEt')->name('site.postEditEt');

Route::get('/sut', 'App\Http\Controllers\SiteController@getSut')->name('site.getSut');
Route::get('/sut-ekle', 'App\Http\Controllers\SiteController@getCreateSut')->name('site.getCreateSut');
Route::post('/sut-ekle', 'App\Http\Controllers\SiteController@postCreateSut')->name('site.postCreateSut');
Route::get('/sut-duzenle', 'App\Http\Controllers\SiteController@getEditSut')->name('site.getEditSut');
Route::post('/sut-duzenle', 'App\Http\Controllers\SiteController@postEditSut')->name('site.postEditSut');

Route::get('/kiyafet', 'App\Http\Controllers\SiteController@getKiyafet')->name('site.getKiyafet');
Route::get('/kiyafet-ekle', 'App\Http\Controllers\SiteController@getCreateKiyafet')->name('site.getCreateKiyafet');
Route::post('/kiyafet-ekle', 'App\Http\Controllers\SiteController@postCreateKiyafet')->name('site.postCreateKiyafet');
Route::get('/kiyafet-duzenle', 'App\Http\Controllers\SiteController@getEditKiyafet')->name('site.getEditKiyafet');
Route::post('/kiyafet-duzenle', 'App\Http\Controllers\SiteController@postEditKiyafet')->name('site.postEditKiyafet');

