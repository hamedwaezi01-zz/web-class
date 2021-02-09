<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Item;
use App\Review;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
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
        $reviews = Review::where('item_id',$id)->where('uid',auth()->user()->id)->get();
        $item['charted'] = false;
        $cookie = unserialize(Request::cookie('chart'));
        if ( $cookie && array_key_exists("".$gid."_".$id, $cookie) ){
            $item['charted'] = true;
        }
        error_log("HERERERER   ".$top_k);

        // error_log($item);
        // return "".$gid."    ".$id;
        return View::make('Product')->with(compact('item','cats','related','top_k','reviews'));
    }

    public function add_to_chart($gid, $id){
        try{
            error_log("^^^^^^^^^^^^^^^^^^^^^1   ".$id);
            // $all = Request::get('data');
            $all = Request::all();
            $charts = Request::cookie('chart');
            error_log("^^^^^^^^^^^^^^^^^^^^^2   ".$gid);

            error_log("^^^^^^^^^^^^^^^^^^^^^3   ".$gid);
            if ($charts) {
                error_log("HERE((((((((((((   " );
                $charts = unserialize($charts);
                $charts["".$gid."_".$id] = "";
            }
            else{
                $charts = ["".$gid."_".$id=>""];
                error_log("HERE)))))))))))))))    ".$all['dataa']);
                error_log("^^^^^^^^^^^^^^^^^^^^^4   ".$gid);
            }
            $response = new \Illuminate\Http\Response(json_encode("{'status':1}"));
            $response->withCookie(cookie("chart",serialize($charts),3600));

            return $response;

        }catch (Exception $excp){
            error_log("HERERERE");
            Log::error($excp);
            return new \Illuminate\Http\Response(json_encode("{'status':0}"));
        }
    }

    public function delete_from_chart($gid, $id){
        $charts = Request::cookie('chart');
        $charts = unserialize($charts);
        // error_log('here');
        if(isset($charts["".$gid."_".$id])){
            unset($charts["".$gid."_".$id]);
            // error_log($charts);
            $response = new \Illuminate\Http\Response(json_encode("{'status':1}"));
            $response->withCookie(cookie("chart",serialize($charts),3600));
            return $response;
        }
        return new \Illuminate\Http\Response(json_encode("{'status':0}"));
    }
}
