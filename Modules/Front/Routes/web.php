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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about-us', 'AboutController@index')->name('about.index');
Route::get('/contact-us', 'ContactController@index')->name('contact.index');
Route::post('/translate', 'TranslatorController@translate');
Route::get('/translate', 'TranslatorController@not_found');