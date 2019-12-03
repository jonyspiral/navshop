<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Category;
class ProductController extends Controller
{
  public function add(){
$title='Agrega Productos.';
$categories=Category::all();
$log= 'login';
$logTittle='Log in';
$avatar='default.png';
return view('/layouts/addProduct',compact('title','categories','log','logTittle','avatar'));

    }

}
