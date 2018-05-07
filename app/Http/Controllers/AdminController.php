<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('administrator.login');
    }

    public function forgot(){
        return view('administrator.forgot');
    }
}
