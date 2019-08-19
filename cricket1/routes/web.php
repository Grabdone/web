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


Route::get('/', function () {
    return view('home');
});
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

Route::get('indexmen', 'HeadlineController@indexmen')->name('headline.indexmen');
Route::get('indexbbl', 'HeadlineController@indexbbl')->name('headline.indexbbl');
Route::get('indexpsl', 'HeadlineController@indexpsl')->name('headline.indexpsl');
Route::resource('headline', 'HeadlineController');

Route::get('userindexmen', 'UserHeadlineController@indexmen')->name('userheadline.indexmen');
Route::get('userindexbbl', 'UserHeadlineController@indexbbl')->name('userheadline.indexbbl');
Route::get('userindexpsl', 'UserHeadlineController@indexpsl')->name('userheadline.indexpsl');
Route::resource('userheadline', 'UserHeadlineController');


Route::get('/creategallary', 'GalleryController@create');
Route::get('/admingallery', 'GalleryController@index');
Route::resource('pic', 'GalleryController');

Route::get('indexaus', 'UserGalleryController@indexaus')->name('usergallery.indexaus');
Route::get('indexeng', 'UserGalleryController@indexeng')->name('usergallery.indexeng');
Route::get('indexwind', 'UserGalleryController@indexwind')->name('usergallery.indexwind');
Route::resource('usergallery', 'UserGalleryController');



Route::get('/createheadline', 'HeadlineController@create');
Route::post('/createheadline', 'HeadlineController@store');
Route::get('/adminheadlines', 'HeadlineController@index');



Route::get('/uploadhighlight', 'VideoController@create');
Route::get('/adminhighlights', 'VideoController@index');
Route::resource('video', 'VideoController');

Route::get('/userhighlights', 'UserVideoController@index');
Route::resource('videos', 'UserVideoController');

