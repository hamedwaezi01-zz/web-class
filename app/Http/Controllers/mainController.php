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

    public function showIndex2(){

        return view('Home2');

    }



    public function addNewsletter(Request $data){
        Newsletter::create([
            'email'=> $data['email'],
        ]);
    }

}
