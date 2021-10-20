<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    // for Signup Customer
    public function signup()
    {
        return view('ps-store/signup');
    }
    // for Login Customer
    public function login()
    {
        return view('ps-store/signup');
    }
}
