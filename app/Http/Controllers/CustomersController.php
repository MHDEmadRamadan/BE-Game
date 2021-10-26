<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    // for Signup Customer
    public function signup(Request $req)
    {
        $name = $req->name;
        $new_customer_name = new Customer();
        $new_customer_name->customer_address = $name;
        // $new_customer_name->save();
        return $new_customer_name;
    }

    // for Login Customer
    public function login()
    {
    }
}