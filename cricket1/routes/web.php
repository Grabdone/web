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

Route::get('/createheadline', 'HeadlineController@create');
Route::post('/createheadline', 'HeadlineController@store');
Route::get('/adminheadlines', 'HeadlineController@index');

