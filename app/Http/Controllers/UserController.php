<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function user()
    {
        $user = User::all();
        return view('admin.user.user',compact('user'));
    }

    public function create()
    {
        return view('admin.user.create_user');
    }

    public function store(Request $req)
    {
        $data = $req->all();

        $validator = Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        
        $user = new User();
    	$user->name = $data['name'];
    	$user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        
        if($validator->fails()){
            return redirect('/administrator/user/create')->with('error','Email Existing');
        }else{
            $user->save();
            return redirect('/administrator/user');
        }
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('admin.user.edit_user',compact('user'));
    }

    public function update(Request $req)
    {
        $data = $req->all();

        $user = User::find($data['id']);
        $user->name = $data['name'];
        
        if($data['password']){
            $user->password = Hash::make($data['password']);            
            if ($user->save()) {
                return response()->json(['success'=>'Successfully.']);
            }else{
                return redirect()->back()->with('data', $data)->with('danger','fail');
            }
        }else{
            if ($user->save()) {
                return response()->json(['success'=>'Successfully.']);
            }else{
                return redirect()->back()->with('data', $data)->with('danger','fail');
            }
        }
    }        

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        if ($user) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect('/administrator/user/')->with('danger','Delete fail');
        }
    }

}
