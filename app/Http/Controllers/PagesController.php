<?php

namespace App\Http\Controllers;

use App\Contact;
use Mail;
use DB;
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

    public function postContact(Request $req){
        DB::table('contacts')->insert(
            [
                'subject'=>$req->subject,
                'fullname'=>$req->fullname,
                'email'=>$req->email,
                'contact_name'=>$req->contact_name,
                'mobile'=>$req->mobile,
                'line_id'=>$req->line_id,
                'message'=>$req->message,
                'created_at'=>\Carbon\Carbon::now()
            ]
        );

        $txt = array(
            'subject'=>$req->subject,
            'fullname'=>$req->fullname,
            'email'=>$req->email,
            'contact_name'=>$req->contact_name,
            'mobile'=>$req->mobile,
            'line_id'=>$req->line_id,
            'bodyMessage'=>$req->message   
        );

        Mail::send('mail', $txt, function ($message) use ($txt){
            $message->from($txt['email'], $txt['fullname']);
            $message->to('jirayus.p@ipassion.co.th', 'Admin');
            $message->subject($txt['subject']);
            $message->priority(1);
        });

        if (Mail::failures()) {
            return redirect()->back()->with('fail', 'Your message cannot sent!');
        }else{
            return redirect()->back()->with('success', 'Your message was sent!');
        }
    }

}
