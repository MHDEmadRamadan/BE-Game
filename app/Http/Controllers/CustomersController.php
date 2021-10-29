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
        $new_customer = new Customer();
        $name = $req->name;
        $new_customer->customer_name = $name;
        $new_customer->customer_number = $req->num;
        $new_customer->customer_address = $req->address;
        $new_customer->customer_password = $req->pass;

        // for change image name and move it to upload folder
        $image_name = rand() . time() . '.' . $req->img->getClientOriginalExtension();
        $new_customer->customer_image = $image_name;
        $req->img->move('.BE-Game.customer', $image_name);

        $new_customer->save();
        return view('ps-store.appointment', compact('name'));
    }

    // for Login Customer
    public function login(Request $req)
    {
        $name = $req->name;
        $pass = $req->pass;
        // $data_check = exist Customer();
    }
}
