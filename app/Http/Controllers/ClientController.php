<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::all();
        // dd($client);
        return view('client.index',compact('client'));
    }
    public function add()
    {
        return view('client.add');
    }
    public function insert(Request $request)
    {
        // dd( $request->all());
        $this->validate($request,[
            'client_name' => 'required|max:255',
            'designation' => 'required|max:500',
            'company' => 'required|max:500',
            'review' => 'required|max:1000',
            'image' => 'required|image|mimes:jpg,png,bmp,jpeg'
        ]);

        $client = new Client();

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/client',$filename);
            $client->image = $filename;
        }
        $client->client_name = $request->input('client_name');
        $client->designation = $request->input('designation');
        $client->company = $request->input('company');
        $client->rating = $request->input('rating');
        $client->review = $request->input('review');
        $client->save();
        return redirect('clients')->with('status',"Client Added Successfully");
    }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit',compact('client'));
    }
    public function update(Request $request,$id)
    {

        $this->validate($request,[
            'client_name' => 'required|max:255',
            'designation' => 'required|max:500',
            'company' => 'required|max:500',
            'review' => 'required|max:1000',

        ]);
        $client = Client::find($id);

        if($request->hasfile('image'))
        {
            $path='assets/uploads/client/'.$client->image;
            if(isset($client->image) && file_exists($path))
            {
                unlink($path);
            }
            $file = $request->file('image');
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/client',$filename);
            $client->image = $filename;

        }
        $client->client_name = $request->input('client_name');
        $client->designation = $request->input('designation');
        $client->company = $request->input('company');
        $client->rating = $request->input('rating');
        $client->review = $request->input('review');
        $client->update();
        return redirect('clients')->with('status',"Client Updated Successfully");
    }
    public function destroy($id)
    {
        $client = Client::find($id);
        if($client->image)
        {
            $path='assets/uploads/client/'.$client->image;
            if(isset($client->image) && file_exists($path))
            {
                unlink($path);
            }
        }
        $client->delete();
        return redirect('clients')->with('status',"client deleted Successfully");
    }
}
