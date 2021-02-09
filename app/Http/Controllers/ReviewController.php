<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Support\Facades\Request;

// use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add_review($gid, $id){
        $name = Request::input("text");
        // $name = $request->input('name', 'default');
        $review = new Review();
        $review->item_id = $id;
        $review->uid = auth()->user()->id;
        $review->description = Request::input('text');
        $review->rating = 2;
        $review->save();
        // $idd = (auth()->user()->name);
        // error_log("".$gid."     ".$id."\t".$name."\t".$idd);
        // return new \Illuminate\Http\Response(json_encode("{'status':1}"));
        return back();
    }
}
