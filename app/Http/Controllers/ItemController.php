<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Item;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ItemController extends Controller
{
    public function get_items($gid, $id){
        try{
            $cats = Groups::all();
            $item = Item::where('group_id',$gid)->where('id',$id)->get()[0];
            $related = Item::where('group_id',$gid)->where('id',"!=",$id)->take(3)->get();
            $top_k = Item::get_top_seller(3);
        }
        catch(Exception $e){
            abort(404);
        }

        error_log("HERERERER   ".$top_k);

        // error_log($item);
        // return "".$gid."    ".$id;
        return View::make('Product')->with(compact('item','cats','related','top_k'));
    }
}
