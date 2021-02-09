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

Route::redirect('/', '/home', 301);
Route::get('/home', 'mainController@showIndex');

Route::get('/category', 'GroupController@show_cats');
Route::get('/category/{gid}', 'GroupController@items_cat')
    ->where('gid','[0-9]+')->name("category.one");

Route::get('/category/{gid}/{id}', 'ItemController@get_items')
    ->where('gid','[0-9]+')->where('id','[0-9]+')->name('item.one');

Route::post('/category/{gid}/{id}', 'ItemController@add_to_chart')
    ->where('gid','[0-9]+')->where('id','[0-9]+')->name('item.add.chart');

Route::delete('/category/{gid}/{id}', 'ItemController@delete_from_chart')
    ->where('gid','[0-9]+')->where('id','[0-9]+')->name('item.delete.chart');

Route::post('/review/{gid}/{id}', "ReviewController@add_review")
    ->where('gid','[0-9]+')->where('id','[0-9]+')->name('review.add');

Route::get('/about', 'aboutController@index')->name('about');

Route::get("/layout", function(){
    return view("layouts/main_layout");
});
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);


/* AUTH AND VOYAGER MADE THESE!! */

Auth::routes();

Route::get('/log', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/* END */

Route::post('/createNewsletter', 'mainController@addNewsletter');

