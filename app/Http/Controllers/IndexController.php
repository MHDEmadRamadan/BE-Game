<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // for ps-store index page
    public function index()
    {
        return view('ps-store/index');
    }

    // for ps-store elements page
    public function elements()
    {
        return view('ps-store/elements');
    }

    // for ps-store left-sideba page
    public function LeftSidebar()
    {
        return view('ps-store/left-sidebar');
    }
    // for ps-store right-sidebar page
    public function RightSidebar()
    {
        return view('ps-store/right-sidebar');
    }
    // for ps-store no-sidebar page
    public function NoSidebar()
    {
        return view('ps-store/no-sidebar');
    }
    // for Appointment no-sidebar page
    public function Appointment()
    {
        return view('ps-store/appointment');
    }
    // for Appointment no-sidebar page
    public function pagelogin()
    {
        return view('ps-store/login');
    }
}
