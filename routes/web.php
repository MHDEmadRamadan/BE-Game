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

use Illuminate\Support\Facades\Route;

// for ps-store index page
Route::get('/', 'IndexController@index');
// for ps-store elements page
Route::get('/elements', 'IndexController@elements');
// for ps-store left-sideba page
Route::get('/left-sidebar', 'IndexController@LeftSidebar');
// for ps-store right-sidebar page
Route::get('/right-sidebar', 'IndexController@RightSidebar');
// for ps-store no-sidebar page
Route::get('/no-sidebar', 'IndexController@NoSidebar');

