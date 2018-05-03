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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello/test',function(){
	return "Hello how are you? test";
});


Route::get('about',function(){
	return "Hi I'm about";
});


Route::get('contact',function(){
	return "Hi I'm contact";
});


Route::get('posts/{id}/{name}',function($id,$name){
	return "this is post number $id --- ok and $name ok!!";
});


Route::get('admin/posts/example',array('as'=>'admin.home',function(){

	$url = route("admin.home");

	return "this URL is ".$url;

}));