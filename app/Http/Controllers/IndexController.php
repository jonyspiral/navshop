<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class IndexController extends Controller
{


public function loadIndex(){
 $categories=Category::all();
  // $auth = new Autenticador;
  $title='Home';
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