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
  $products=Product::where('category_id','=',"$id")->paginate(3);


return view('categoriesList',compact('title','id','products'));
}
public function menu(){
  $categories=Category::all();
return view('menu',compact('categories'));
}

}
