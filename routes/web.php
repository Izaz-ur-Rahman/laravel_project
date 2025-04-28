<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Http\Controllers\DemoController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo',function(){
//     return view('demo');
// });

// // route with data ...
// Route::get('demo/{name}/{id?}',function($name,$id= null){
//     // echo $name;
//    // echo $id;
//     $data = compact('name','id');
//     return view('demo')->with($data);
// });


// Route::get('/',function(){
//     return view('home');
// });


// Route::get('/about',function(){
//     return view('about');
// });



// Route::get('/course',function(){
//     return view('course');
// });
Route::get('/',[DemoController::class,'index']);