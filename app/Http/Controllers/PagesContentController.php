<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;

class PagesContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
