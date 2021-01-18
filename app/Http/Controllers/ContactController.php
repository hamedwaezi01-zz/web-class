<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }
    public function contactPost(Request $data){
        Contact::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'message'=> $data['message'],
        ]);

    }
}
