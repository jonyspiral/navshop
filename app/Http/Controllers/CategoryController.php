<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Auth;
class CategoryController extends Controller
{

public function getRoute($id){

  $Userlog = Auth::user();
  $title=Category::find($id)->name;
  $categories=Category::all();
  $products=Product::where('category_id','=',"$id")->paginate(3);

return view('categoriesList',compact('title','id','categories','products'));
}
public function menu(){
  $categories=Category::all();
return view('menu',compact('categories'));
}

}
