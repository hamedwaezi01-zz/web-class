<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

// Route::get('/', 'mainController@showIndex');
Route::redirect('/', '/home', 301);
Route::get('/home', 'mainController@showIndex');

Route::get('/category', 'GroupController@show_cats');
Route::get('/category/{gid}', 'GroupController@items_cat')
    ->where('gid','[0-9]+')->name("category.one");

Route::get('/category/{gid}/{id}', 'ItemController@get_items')
    ->where('gid','[0-9]+')->where('id','[0-9]+')->name('item.one');

Route::get('/home2', 'mainController@showIndex2');

Route::get("/layout", function(){
    return view("layouts/main_layout");
});
Route::get('/contact', 'ContactController@contact');
Route::post('/contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);

//Route::get('/', function () {
//    return view('mainHome');
//});



/* AUTH AND VOYAGER MADE THESE!! */

Auth::routes();

Route::get('/log', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/* END */

Route::post('/createNewsletter', 'mainController@addNewsletter');

