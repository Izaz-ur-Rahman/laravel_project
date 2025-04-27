<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo',function(){
    return view('demo');
});

// route with data ...
Route::get('demo/{name}',function($name){
    echo $name;
});