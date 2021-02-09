<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Item;
use App\Newsletter;
use App\Slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class mainController extends Controller
{
    //

    //MAIN HOME PAGE

    public function showIndex(){
        $cats = Groups::all();
        // Getting featured items
        $featured = Item::where('discount','>',0)->orderBy('discount','desc')->limit(6)->get();
        $latest = Item::orderBy('created_at','desc')->limit('6')->get();
        $slides = Slides::limit(5)->get();
        error_log('HELLO THERE   '.$latest);
        return View::make("Home")->with(compact('cats','featured','latest','slides'));
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
