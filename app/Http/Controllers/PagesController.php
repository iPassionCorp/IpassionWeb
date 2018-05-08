<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        return view('index');
    }

    public function development(){
        return view('development');
    }

    public function devops(){
        return view('devops');
    }
    
    public function careers(){
        return view('careers');
    }

    public function contact(){
        return view('contact');
    }

}
