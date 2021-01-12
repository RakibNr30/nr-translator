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

// Site routes...
Route::resource('site', 'SiteController')->only(['index', 'update']);
// Contact routes...
Route::resource('contact', 'ContactController')->only(['index', 'update']);
// Seo routes...
Route::resource('seo', 'SeoController')->only(['index', 'update']);
