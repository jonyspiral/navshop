<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Category;
class ProductController extends Controller
{
public function loadAdd($id){
      $title='Editar Producto.';


return view('/addProduct',compact('title','id'));
}
public function add(Request $req){
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
  $route=$req->file('image')->store('public/products');
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
    $categories=Category::all();
    $product= Product::find($id);
    // dd($product);

    return view('/editProduct',compact('title','categories','product'));
  }

  public function show($id){

    $title='Detalle del Producto.';
    $categories=Category::all();
    $product= Product::find($id);
    return view('detailProduct',compact('title','categories','product'));
  }

  public function update($id, Request $req){
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
      $route=$req->file('image')->store('public/products');
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
