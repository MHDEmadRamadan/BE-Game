<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    // for dashboard index page
    public function indexdash()
    {
        return view('dashboard/index');
    }
    // for dashboard index1 page
    public function index1dash()
    {
        return view('dashboard/index1');
    }
    // for dashboard email-compose page
    public function emailcompose()
    {
        return view('dashboard/email-compose');
    }
    // for dashboard email-read page
    public function emailread()
    {
        return view('dashboard/email-read');
    }
    // for dashboard email-inbox page
    public function emailinbox()
    {
        return view('dashboard/email-inbox');
    }
    // for dashboard form-layout page
    public function formlayout()
    {
        return view('dashboard/form-layout');
    }
    // for dashboard form-validation page
    public function formvalidation()
    {
        return view('dashboard/form-validation');
    }
    // for dashboard form-editor page
    public function formeditor()
    {
        return view('dashboard/form-editor');
    }
    

    // for dashboard page-login page
    public function pagelogin()
    {
        return view('dashboard/page-login');
    }
    // for dashboard page-register page
    public function pageregister()
    {
        return view('dashboard/page-register');
    }
    // for dashboard page-invoice page
    public function pageinvoice()
    {
        return view('dashboard/page-invoice');
    }
    // for dashboard app-profile page
    public function appprofile()
    {
        return view('dashboard/app-profile');
    }
    // for dashboard register-admin page
    public function registeradmin()
    {
        return view('dashboard/register-admin');
    }
}
