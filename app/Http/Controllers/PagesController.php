<?php

namespace App\Http\Controllers;

use App\Pages;
use App\Contact;
use App\ApplyJobs;
use App\Careers;
use Mail;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $home = DB::table('pages')->where('page', '=', 'Home')->limit(1)->get();
        return view('index',compact('home'));
    }

    public function development(){
        return view('development');
    }

    public function devops(){
        return view('devops');
    }
    
    public function careers(){
        $careers = DB::table('careers')->where('published', '=', 1)->orderBy('sort', 'asc')->get();
        return view('careers',compact('careers'));
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

    public function applyJob(Request $req){
        if ($req->hasFile('cv_upload')){
            $temp = explode(".", $req->file('cv_upload')->getClientOriginalName());
            $filename = round(microtime(true)) . '.' . end($temp);
            $destination = base_path() . '/public/storage/cv-upload';
            $req->file('cv_upload')->move($destination, $filename);
            DB::table('jobs')->insert(
                [
                    'job_title'=>$req->job_title,
                    'fullname'=>$req->fullname,
                    'email'=>$req->email,
                    'mobile'=>$req->mobile,
                    'cv_upload'=>$filename,
                    'created_at'=>\Carbon\Carbon::now()
                ]
            );
        }

        return redirect()->back()->with('success', 'Job application successful!');
    }
}
