<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use Auth;
class IndexController extends Controller
{


public function loadIndex(){
 $categories=Category::all();
   $title='Home';
   $Userlog = Auth::user();
   if ($Userlog==null){
   $log= 'login';
   $logTitle='Log in';
   $avatar='/img/avatar/default.png';
   }else{
   $log= '/logout';
   $logTitle='Log out';
   $avatar='/img/avatar/'.$Userlog->avatar;
   }
  return view('index',compact('log','logTitle','avatar','title','categories'));

}
public function loadLogin(){
    $title;
    $email='';
  $errores=[];
 return view('login',compact('email','errores','title'));
  }

}
