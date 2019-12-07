<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiPerfilController extends Controller
{
    public function toMiPerfil(){

  $user= '';
  $email = '';
  $name= '';
  $lastName= '';
  $avatar = '';
  $newPass= '';
  $password='';
  $confirmPassword='';
  $errores=[];


  $db = new DataBase;
    $validator= New Validator ($db);
    if (isset($_COOKIE['mantener'])) {
       $usuario= $db->buscarUsuarioEmail($_COOKIE['mantener']);
        $auth->loguear($usuario);
    }
    if ($validator->estaElUsuarioLogeado()){
    $log= 'logout';
    $logTittle='Log out';
    $avatar='';/*$_SESSION['avatar'];*/
    }else{
    $log= 'login';
    $logTittle='Log in';
    $avatar='default.png';
    return view('miPerfil',compact('user','email','name','lastName','password','log','logTittle','avatar'));

    }
    }
}
