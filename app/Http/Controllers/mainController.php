<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    //

    //MAIN HOME PAGE

    public function showIndex(){

        return view('Home');

    }

    public function showContact(){
        return view('contact');
    }

    public function addNewsletter(Request $data){
        Newsletter::create([
            'email'=> $data['email'],
        ]);
    }

}
