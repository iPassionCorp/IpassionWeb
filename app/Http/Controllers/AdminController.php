<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout() {
        auth()->logout();
        return redirect('/administrator');
    }

    public function dashboard($value='')
    {
        return view('admin.dashboard');
    }

    public function user($value='')
    {
        $users = User::all();
        return view('admin.user.user',compact('users'));
    }
}
