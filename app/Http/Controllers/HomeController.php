<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("Payment.home");
    }

    public function success(){
        return view("Payment.success");
    }

    public function error(){
        return view("Payment.error");
    }
}
