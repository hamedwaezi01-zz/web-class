<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    public function index(){
        $cats = Groups::all();
        return view('About')->with(compact('cats'));
    }
}
