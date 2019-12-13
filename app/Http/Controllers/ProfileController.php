<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
public function add(){
      if (!Auth::user()) {
        return redirect("login");
      }else {
        $user = Auth::user();
      }
  $title='Edita tu perfil';
  return view('/editProfile',compact('user','title'));
}
public function show(){
      if (!Auth::user()) {
        return redirect("login");
      }else {
        $user = Auth::user();
      }
  $title='Mi Perfil';
  return view('/profile',compact('user','title'));
}
}
