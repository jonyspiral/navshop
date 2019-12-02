<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function getCategories(){

    $title='Televisores y Audios';
    $db = new DataBase;
    $validator= New Validator ($db);
    $categories=Category::all();
    if ($validator->estaElUsuarioLogeado()){
    $log= 'logout';
    $logTittle='Log out';
    $avatar='';/*$_SESSION['avatar'];*/
    }else{
    $log= 'login';
    $logTittle='Log in';
    $avatar='default.png';
    }
  return view('categoriesList',compact('log','logTittle','avatar','categories','title'));

}
public function getRoute($id){

  $title=Category::find($id)->name;

  $categories=Category::all();

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
return view('categoriesList',compact('log','logTittle','avatar','categories','title','id'));
}
public function getProducts($id){



  $products=Product::Where ($id)//// WARNING:

  

  }
return view('productsList',compact('idCategory'));

}
