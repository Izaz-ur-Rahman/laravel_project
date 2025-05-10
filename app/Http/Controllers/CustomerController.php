<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CustomerController extends Controller
{
   public function index(){
      $url = url('')
    return view('form');
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
         $url = url('/customer/update')."/".$id;
         $data = compact('customer');
         return redirect('customer')->with($data);
      }
   }
}
