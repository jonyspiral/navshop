<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use App\Cart;

class CartController extends Controller
{

public function show(){
  $title= 'mi Carro';
  $userId= Auth::user()->id;
  //$carts=Cart::where('user_id','=',$userId)->get();
  // dd($carts);
  $carts = Auth::user()->products()->get();
  return view('cart', compact('title','carts'));
}
public function add(Request $req){
  $cart=new Cart();
  $cart->user_id= Auth::user()->id;
  $cart->product_id=$req['id'];


  return back();
}


}
