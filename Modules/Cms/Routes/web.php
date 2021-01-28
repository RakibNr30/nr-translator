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

// Banner routes...
Route::resource('home-banner', 'BannerController')->only(['index', 'update']);
// About routes...
Route::resource('about-us', 'AboutController')->only(['index', 'update']);
// History routes...
Route::resource('our-history', 'HistoryController')->only(['index', 'update']);
// Plan routes...
Route::resource('our-plan', 'PlanController')->only(['index', 'update']);
// Article routes...
Route::resource('article', 'ArticleController');