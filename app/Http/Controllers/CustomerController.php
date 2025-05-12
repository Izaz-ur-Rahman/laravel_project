<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CustomerController extends Controller
{
   public function index(){
         $title = "Customer Registration Form";
      $url = url('/register');

      $data = compact('url','title');
    return view('form')->with($data);
   }
   public function store(Request $request){
        echo "<pre>";
        print_r($request->all()); // This stops execution and dumps input data
      //   echo "code is running";
        // insert query
        $customer = new Customers;
        // insertion of record done here i mean insert query are running here
      //   $customer->id = $request->input('id');
        $customer->name = $request['name'];
        $customer->email  = $request['email'];
        $customer->password = $request['pass'];
        $customer->save();
         return  redirect('/customer/view');
   }

   public function view(){
      // select query are here
      $customers = Customers::all();
      $data = compact('customers');
      return view('customer-view')->with($data);
   }

   public function trash(){
      // select query are here
      $customers = Customers::onlyTrashed()->get();
      $data = compact('customers');
      return view('customer-trash')->with($data);
   }
   public function delete($id){
// delete query are here4
$customer = Customers::find($id);
if(!is_null($customer)){
   $customer->delete();

}
return redirect('/customer/view');
   }

   public function edit($id){
      $customer = Customers::find($id);
      if(is_null($customer)){
         return redirect('/customer/view');

      }
      else{
         $title = "Update Customer detail Form";

         $url = url('/customer/update')."/".$id;
         $data = compact('customer','url','title');
         return view('form')->with($data);
      }
   }

   public function update($id,Request $request){
      p($request->all());
      $customer = Customers::find($id);
      $customer->name = $request['name'];
      $customer->email  = $request['email'];
      $customer->save();
      return redirect('/customer/view');
   }
}
