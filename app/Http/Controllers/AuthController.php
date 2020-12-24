<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function regist(){
   	return view('register');
   }

   public function sambut(){
   	return view('sambutan');
   }
}
