<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class MiPerfilController extends Controller
{
    public function toMiPerfil(){

      if (!Auth::user()) {
    return redirect("login");
  }else {
    $user = Auth::user();

    }

  $title='Mi Perfil';


    return view('/miPerfil',compact('user','title'));



}
}
