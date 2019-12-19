<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use Auth;
class IndexController extends Controller
{


public function loadIndex(){
 $categories=Category::all();
   $title='Bienvenidos!!!';

  return view('index',compact('title','categories'));
}

public function loadLogin(){
    $title;
    $email='';
  $errores=[];
 return view('login',compact('email','errores','title'));
  }



}
