<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class IndexController extends Controller
{


public function loadIndex(){
 $categories=Category::all();

  $title='Home';
  $log= 'login';
  $logTittle='Log in';
  $avatar='default.png';
  return view('index',compact('log','logTittle','avatar','title','categories'));
}

}
public function loadLogin(){
    $title;
    $email='';
  $errores=[];
 return view('login',compact('email','errores','title'));
  }




}
