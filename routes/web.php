<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo',function(){
    return view('demo');
});

// route with data ...
Route::get('demo/{name}/{id}',function($name,$id= null){
    // echo $name;
   // echo $id;
    $data = compact('name','id');
    return view('demo')->with($data);
});