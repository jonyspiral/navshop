<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Producto;
use App\Category;
class ProductController extends Controller
{
  public function add($id){

$title='Agrega Productos.';

$Userlog = Auth::user();
if ($Userlog==null){
$log= 'login';
$logTitle='Log in';
$avatar='/img/avatar/default.png';
}else{
$log= '/logout';
$logTitle='Log out';
$avatar='/img/avatar/'.$Userlog->avatar;
}
$title=Category::find($id)->name;
$categories=Category::all();

return view('layouts/addProduct',compact('title','categories','log','logTitle','avatar','id'));

    }

}
