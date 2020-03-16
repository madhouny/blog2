<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        return view('contact');
    }

    public function ContactRequest(Request $request){
        $email = $request['email'];
        $name = $request['name'];
        $message =$request['message'];

        $contact = new Contact();
        $contact->contact_email = $email;
        $contact->contact_name = $name;
        $contact->contact_message = $message;

        $contact->save();
        return redirect()->back();

    }

}
