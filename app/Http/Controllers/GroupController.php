<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class GroupController extends Controller
{
    public function show_cats(){
        $item = Groups::all();
        return $item;
    }
    public function items_cat($gid){
        $cats = Groups::all();
        $group = Groups::where('id',$gid)->get()[0];
        $top_k = Item::get_top_seller(3);

        error_log($group);
        $items = Item::where('group_id', $gid)->get();
        foreach ($items as $item => $value) {
             $value['image'] = str_replace('\\', '/', $value['image']);
        }
        return View::make("Category")->with(compact('items','cats','group','top_k'));
    }
}
