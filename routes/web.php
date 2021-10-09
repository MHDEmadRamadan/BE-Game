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



// dashboard admin rote

         // for dashboard index page
Route::get('/adminindex', 'DashboardController@indexdash');
         // for dashboard index1 page
Route::get('/adminindex1', 'DashboardController@index1dash');
         // for dashboard email-compose page
Route::get('/admincompose', 'DashboardController@emailcompose');
         // for dashboard email-read page
Route::get('/adminread', 'DashboardController@emailread');
         // for dashboard email-inbox page
Route::get('/adminemailinbox', 'DashboardController@emailinbox');
         // for dashboard form-layout page
Route::get('/adminformlayout', 'DashboardController@formlayout');
         // for dashboard form-validation page
Route::get('/adminformvalidation', 'DashboardController@formvalidation');
         // for dashboard form-editor page
Route::get('/adminformeditor', 'DashboardController@formeditor');
         // for dashboard table-datatable page
Route::get('/tabledatatable', 'DashboardController@tabledatatable');
         // for dashboard page-login page
Route::get('/pagelogin', 'DashboardController@pagelogin');
         // for dashboard page-register page
Route::get('/pageregister', 'DashboardController@pageregister');
         // for dashboard page-invoice page
Route::get('/pageinvoice', 'DashboardController@pageinvoice');
         // for dashboard app-profile page
Route::get('/appprofile', 'DashboardController@appprofile');
