<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function user()
    {
        $users = User::all();
        return view('admin.user.user',compact('users'));
    }

    public function create()
    {
        return view('admin.user.create_user');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }

    protected function post(Request $req)
    {
        $data = $req->all();
        
        $usr = new User();
    	$usr->name = $data['name'];
    	$usr->email = $data['email'];
        $usr->password = Hash::make($data['password']);
        
        if($usr->save()){
            return redirect('/administrator/user');
        }
    }
}
