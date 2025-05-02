<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function form(){
        return view('form');
    }
    public function register(Request $request){
            print_r($request->all());
    }
}
