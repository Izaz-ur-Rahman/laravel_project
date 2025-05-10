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
        print_r($request->all()); // This stops execution and dumps input data
      //   echo "code is running";
        // insert query
        $customer = new Customers;
      //   $customer->id = $request->input('id');
        $customer->name = $request['name'];
        $customer->email  = $request['email'];
        $customer->password = $request['pass'];
        $customer->save();
         return  redirect('/customer/view');
   }

   public function view(){
      $customers = Customers::all();
      $data = compact('customers');
      return view('customer-view')->with($data);
   }

   public function delete(){

   }
}
