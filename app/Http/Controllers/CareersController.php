<?php

namespace App\Http\Controllers;

use App\Jobs;
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
    public function create()
    {
        return view('admin.pagesContent.create_page');
    }

    public function store(Request $req)
    {
        $data = $req->all();

    	$pages = new Pages();
    	$pages->page = $data['page'];
        $pages->title = $data['title'];
        $pages->description = $data['description'];
        $pages->content = $data['content'];

    	if ($pages->save()) {
		    return redirect('/administrator/pages/')->with('msg-success','successfully');
    	}else{
		    return redirect('/administrator/pages/')->with('msg-danger','fail');
    	}
    }

    public function listPages(){
        $pages = Pages::all();
        return view('admin.pagesContent.list_pages',compact('pages'));
    }

    public function edit($id)
    {
    	$pages = Pages::find($id);
    	return view('admin.pagesContent.edit_page',compact('pages'));
    }

    public function update(Request $req)
    {
        $data = $req->all();

        $pages = Pages::find($data['id']);
        $pages->page = $data['page'];
        $pages->title = $data['title'];
        $pages->description = $data['description'];
        $pages->content = $data['content'];
        
        if ($pages->save()) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect()->back()->with('data', $data)->with('danger','fail');
        }
    }

    public function delete($id)
    {
        $pages = Pages::find($id)->delete();

        if ($pages) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect('/administrator/pages/')->with('danger','Delete fail');
        }
    }
}
