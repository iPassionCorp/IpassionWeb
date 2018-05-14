<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $clients = Clients::all();
        return view('admin.clients.clients_list',compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create_clients');
    }

    public function store(Request $req)
    {
        $data = $req->all();

        $clients = new Clients();
        $clients->sort = $data['sort'];
        $clients->name = $data['name'];
        $clients->url = $data['url'];
        $clients->published = $data['published'];
        if ($req->hasFile('image')){
            $temp = explode(".", $req->file('image')->getClientOriginalName());
            $filename = round(microtime(true)) . '.' . end($temp);
            $destination = base_path() . '/public/storage/clients';
            $req->file('image')->move($destination, $filename);
            $clients->image = $filename;
        }

    	if ($clients->save()) {
		    return redirect('/administrator/clients/')->with('msg-success','successfully');
    	}else{
		    return redirect('/administrator/clients/')->with('msg-danger','fail');
    	}
    }

    public function edit($id)
    {
    	$clients = Clients::find($id);
    	return view('admin.clients.edit_clients',compact('clients'));
    }

    public function update(Request $req)
    {
        $data = $req->all();

        $clients = Clients::find($data['id']);
        $clients->sort = $data['sort'];
        $clients->name = $data['name'];
        $clients->url = $data['url'];
        $clients->published = $data['published'];

        if($req->hasFile('image')){
            $temp = explode(".", $req->file('image')->getClientOriginalName());
            $filename = round(microtime(true)) . '.' . end($temp);
            $destination = base_path() . '/public/storage/clients';
            $req->file('image')->move($destination, $filename);
            $clients->image = $filename;
        }
        
        if ($clients->save()) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect()->back()->with('data', $data)->with('danger','fail');
        }
    }

    public function delete($id)
    {
        $clients = Clients::find($id);
        $destination = base_path() . '/public/storage/clients/';
        unlink($destination.$clients->image);
        $clients->delete();

        if ($clients) {
            return response()->json(['success'=>'Successfully.']);
        }else{
            return redirect('/administrator/clients/')->with('danger','Delete fail');
        }
    }

}
