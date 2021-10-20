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

// client pages route

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

// for ps-store Appointment page
Route::get('/appointment', 'IndexController@Appointment');

          // for page-login page
Route::get('/pagelogin', 'IndexController@pagelogin');



// admin pages route

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

         // for dashboard form-editor page
Route::get('/adminformeditor', 'DashboardController@formeditor');

         // for dashboard datatable page and browse reservation
Route::get('/reservationstable', 'DashboardController@browse');

         // for delete reservation
Route::get('/reservationstable/delete/{id}', 'DashboardController@delete');

          // for dashboard page-login page
// Route::get('/pagelogin', 'DashboardController@pagelogin');

          // for dashboard page-register
// Route::get('/pageregister', 'DashboardController@pageregister');

         // for dashboard page-invoice page
// Route::get('/pageinvoice', 'DashboardController@pageinvoice');

         // for dashboard app-profile page
Route::get('/appprofile', 'DashboardController@appprofile');

         // for dashboard register admin page
Route::get('/registeradmin', 'DashboardController@registeradmin');


        // for model reservation Add Appointment 
        Route::post('/reservation/appointment', 'ReservationsController@AddAppointment');
