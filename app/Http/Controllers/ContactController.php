<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    //
    public function contact(){
        $cats = Groups::all();
        return View::make("contact")->with(compact('cats'));
    }
    public function contactPost(Request $data){
        Contact::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'message'=> $data['message'],
        ]);

    }
}
