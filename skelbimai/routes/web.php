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

Route::get('/', 'HomeController@index');
Route::get('/ads', 'HomeController@ads');
Route::get('/ad/', 'HomeController@showAd');
Route::get('/about/', 'HomeController@about');
Route::get('/contact/', 'HomeController@contact');
Route::get('/ad_form/', 'AdController@adForm');
Route::get('/category_form/', 'CategoryController@adCategory'); /*parodo html forma*/
Route::get('/category_management/', 'CategoryController@categoryManagement'); /*parodo html forma*/
Route::get('/category_delete/{category}', 'CategoryController@categoryDelete'); /*parodo html forma*/

Route::post('/store_category/', 'CategoryController@storeCategory'); /*parodo html forma*/

/*pirma pages pavadinimas 2-funkcijos*/


