<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Category;
class ProductController extends Controller
{
  public function loadForm($id){

    $title='Agrega Productos.';

    $Userlog = Auth::user();
    if ($Userlog==null){
    $log= '/auth/login';
    $logTitle='Log in';
    $avatar='/img/avatar/default.png';
    }else{
    $log= '/logout';
    $logTitle='Log out';
    $avatar='/img/avatar/'.$Userlog->avatar;
    }
    // $title=Category::find($id)->name;
    $categories=Category::all();

    return view('layouts/addProduct',compact('title','categories','log','logTitle','avatar','id'));
  }

public function add(Request $req){
  $errores='';

  $reglas=[
    "name"=>"string|unique:products,name|min:5",
    "imagen"=>"file",
  "stock"=>"numeric",
  "description"=>"string|max:254",
  "price"=>"numeric|min:0",
  "discount" =>"numeric|min:0|max:90",
  ];
  $mensajes=[
    "string"=>"el campo :attribute debe ser un texto",
    "unique"=>"el campo :attribute ya existe.",
    "min"=>"el campo :attribute debe ser mas largo",
    "max"=>"el campo :attribute debe ser mas corto",
    "numeric"=>"el campo :attribute debe ser un numero",
    "date"=>"el campo :attribute deber ser fecha"
  ];
  $this->validate($req,$reglas,$mensajes);
  $product= New Product ();
  $route=$req->file('image')->store('public');
  $fileName=basename($route);
  $product->image=$fileName;
  $product->name=$req['name'];
  $product->category_id=$req['category_id'];
  $product->stock=$req['stock'];
  $product->description=$req['description'];
  $product->price=$req['price'];
  $product->discount=$req['discount'];
  $product->save();
  return redirect("/categoryList/$product->category_id");
}
// Editar
public function loadFormEdit($id){

    $title='Editar Producto.';
    //
    // $Userlog = Auth::user();
    // if ($Userlog==null){
    // $log= 'login';
    // $logTitle='Log in';
    // $avatar='/img/avatar/default.png';
    // }else{
    // $log= '/logout';
    // $logTitle='Log out';
    // $avatar='/img/avatar/'.$Userlog->avatar;
    // }

    // $title=Category::find($id)->name;
    $categories=Category::all();
    // var_dump($categories);exit;
    $product= Product::find($id);

    return view('/layouts/editProduct',compact('title','categories','product'));
  }

  public function loadFormDetail($id){

    $title='Detalle del Producto.';

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

    // $title=Category::find($id)->name;
    $categories=Category::all();
    $product= Product::find($id);
    return view('detail',compact('title','categories','log','logTitle','avatar','id','product'));
  }

  public function update($id, Request $req){
    $errores='';

    $reglas=[
      "name"=>"string|unique:products,id,".$id."|min:5",
      "imagen"=>"file",
      "stock"=>"numeric",
      "description"=>"string|max:254",
      "price"=>"numeric|min:0",
      "discount" =>"numeric|min:0|max:90",
    ];
    $mensajes=[
      "string"=>"el campo :attribute debe ser un texto",
      "unique"=>"el campo :attribute ya existe.",
      "min"=>"el campo :attribute debe ser mas largo",
      "max"=>"el campo :attribute debe ser mas corto",
      "numeric"=>"el campo :attribute debe ser un numero",
      "date"=>"el campo :attribute deber ser fecha"
    ];
    $this->validate($req,$reglas,$mensajes);
    $product=  Product::find($id);
    if ($req->file('image')) {
      $route=$req->file('image')->store('public');
      $fileName=basename($route);
      $product->image=$fileName;
    }
    $product->name=$req['name'];
    $product->category_id=$req['category_id'];
    $product->stock=$req['stock'];
    $product->description=$req['description'];
    $product->price=$req['price'];
    $product->discount=$req['discount'];
    $product->save();
    return redirect()->back();
  }

  public function delete(Request $req){
    $id=$req['id'];
    $product= Product::find($id);
    $product->delete();
    return redirect("/categoryList/$product->category_id");
    }
}
