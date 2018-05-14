<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

    public function contactList()
    {
        $contacts = Contacts::all();
        return view('admin.contact_form',compact('contacts'));
    }

    public function contactDelete($id)
    {
        $contacts = Contacts::find($id)->delete();

        if ($contacts) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect('/administrator/contact-form')->with('danger','Delete fail');
        }
    }
}
