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

// client pages Route

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

// for ps-singup page
Route::get('/pagesignup', 'IndexController@pagesignup');

// for ps-login page
Route::get('/pagelogin', 'IndexController@pagelogin');

// Customer Route
// for singup
Route::post('/cu-signup', 'CustomersController@signup');
// for login
Route::get('/cu-login', 'CustomersController@login');

// admin pages Route

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
// Route::get('/adminformlayout', 'DashboardController@formlayout');

// for dashboard form-validation page
// Route::get('/adminformvalidation', 'DashboardController@formvalidation');

// for dashboard form-editor page
Route::get('/adminformeditor', 'DashboardController@formeditor');

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

// Reservations Route
// for dashboard datatable page and browse reservation
Route::get('/reservationstable', 'ReservationsController@browse');

// for delete reservation
Route::get('/reservationstable/delete/{id}', 'ReservationsController@delete');

// for model reservation Add Appointment
Route::post('/add/appointment', 'ReservationsController@AddAppointment');

// for model reservation Edite Appointment 
     Route::get('/Edite/appointment/{id}', 'ReservationsController@EditeAppointment');

