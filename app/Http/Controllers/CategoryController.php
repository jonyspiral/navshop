<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{



  public function getCategories(){
    $title='Televisores y Audios';
    $db = new DataBase;
    $validator= New Validator ($db);
    if ($validator->estaElUsuarioLogeado()){
    $log= 'logout';
    $logTittle='Log out';
    $avatar='';/*$_SESSION['avatar'];*/
    }else{
    $log= 'login';
    $logTittle='Log in';
    $avatar='default.png';

  }
  $categories='';/*Category::all();*/
  return view('categoriesList',compact('log','logTittle','avatar','categories','title'));




}
}
