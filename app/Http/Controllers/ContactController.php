<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('id', 'DESC')->get();
        return view('contact.index',compact('contact'));
    }
    public function add()
    {
        return view('contact.contact_add');
    }


    public function insert(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|max:500',
            'subject' => 'required|max:500',
            'message' => 'required|max:1000',

        ]);

        //------------ Save in Database ------------
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');      
        $contact->save();


        
        //------------ Save in Database ------------
        //************ Don't Delete *************/

        // $to = "admin@excelitai.com";
        // $subject = $request->input('subject');
        
        // $message = "<b>This is HTML message.</b>";
        // $message .= "<h1>This is headline.</h1>";
        
        // $header = "From:no-replay@excelitai.com \r\n";
        // $header .= "MIME-Version: 1.0\r\n";
        // $header .= "Content-type: text/html\r\n";
        
        // $retval = mail ($to,$subject,$message,$header);

        //************ Don't Delete  *************/

        return redirect('contact')->with('status',"Contact Added Successfully");
    }

    public function insertAPI(Request $request)
    {
        date_default_timezone_set("Asia/Dhaka");
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|max:500',
            'subject' => 'required|max:500',
            'message' => 'required|max:1000',

        ]);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        // $contact->status = $request->input('status');
        return $contact->save();     
    }



    public function view($id)
    {
        $contact = Contact::find($id);
        $contact->status = 1;
        $contact->save();
        return view('contact.view_message',compact('contact'));
    }

    public function destroy($id)
    {
        $employee = Contact::find($id);       
        $employee->delete();
        return redirect('contact')->with('status',"Message deleted Successfully");
    }
}
