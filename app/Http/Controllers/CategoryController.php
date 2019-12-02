<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{

public function getRoute($id){

  $title=Category::find($id)->name;
  $categories=Category::all();
  $products=Product::where('category_id','=',"$id")->get();

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
return view('categoriesList',compact('log','logTittle','avatar','categories','title','id','products'));
}

}
