<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductController extends Controller
{
  public function getProductsCategory($categoria_id){


    $products=Category::where('id','=',"$categoria_id");

    }
  return view('productList',compact('products'));

}
