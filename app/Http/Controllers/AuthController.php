<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function regist(){
   	return view('register');
   }

   public function form(Request $request)
   {
	   $first = $request -> first_name;
	   $last = $request -> last_name;


	   	return view('sambutan', compact('first','last'));
   }
}
