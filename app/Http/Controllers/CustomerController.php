<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
class CustomerController extends Controller
{
   public function index(){
    return view('form');
   }
   public function store(Request $request){
        echo "<pre>";
        dd($request->all()); // This stops execution and dumps input data
        $customer = new Customers;
        $customer->name = $request['name'];
        $customer->email  = $request['email'];
        $customer->password = $request['pass'];
        $customer->save();

   }
}
