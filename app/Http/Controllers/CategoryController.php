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
  // if ($Userlog==null){
  // $log= 'login';
  // $logTitle='Log in';
  // $avatar='/img/avatar/default.png';
  // }else{
  // $log= '/logout';
  // $logTitle='Log out';
  // $avatar='/img/avatar/'.$Userlog->avatar;
  // }
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
