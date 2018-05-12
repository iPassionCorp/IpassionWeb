<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\Careers;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function applyJobList()
    {
        $jobs = Jobs::all();
        return view('admin.careers.careers_form',compact('jobs'));
    }

    public function applyJobDelete($id)
    {
        $jobs = Jobs::find($id);
        $destination = base_path() . '/public/storage/cv-upload/';
        unlink($destination.$jobs->cv_upload);
        $jobs->delete();

        if ($jobs) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect('/administrator/contact-form')->with('danger','Delete fail');
        }
    }

    //Careers Content
    public function view()
    {
        $careers = Careers::all();
        return view('admin.careers.careers_list',compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create_careers');
    }

    public function store(Request $req)
    {
        $data = $req->all();

    	$careers = new Careers();
    	$careers->sort = $data['sort'];
        $careers->job_title = $data['job_title'];
        $careers->detail = $data['detail'];
        $careers->published = $data['published'];

    	if ($careers->save()) {
		    return redirect('/administrator/careers/')->with('msg-success','successfully');
    	}else{
		    return redirect('/administrator/careers/')->with('msg-danger','fail');
    	}
    }

    public function edit($id)
    {
    	$careers = Careers::find($id);
    	return view('admin.careers.edit_careers',compact('careers'));
    }

    public function update(Request $req)
    {
        $data = $req->all();

        $careers = Careers::find($data['id']);
        $careers->sort = $data['sort'];
        $careers->job_title = $data['job_title'];
        $careers->detail = $data['detail'];
        $careers->published = $data['published'];
        
        if ($careers->save()) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect()->back()->with('data', $data)->with('danger','fail');
        }
    }

    public function delete($id)
    {
        $careers = Careers::find($id)->delete();

        if ($careers) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect('/administrator/pages/')->with('danger','Delete fail');
        }
    }
}
