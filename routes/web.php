<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customers;
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
Route::get('/',[DemoController::class,'index']); // first method for calling contoller function
Route::get('about','App\Http\Controllers\DemoController@about'); //2nd method

// Route::get('about','DemoController@about'); //3rd old laravel method for calling controller functions

Route::get('/courses',SingleActionController::class);

// invoking the resourse controlling here below

Route::resource('photo','PhotoController::class');

Route::get('/form',[RegistrationController::class,'form']);
Route::post('/register',[RegistrationController::class,'register']);

// Route::get('/customers',function(){
//     $customer = Customers::all();
//       echo  "<pre>";
//         print_r($customer->toArray());
// });


Route::get('/register', [CustomerController::class, 'index']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::post('/register', [CustomerController::class, 'store'])->name('customer.create');