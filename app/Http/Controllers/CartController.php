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
public function add(Request $req, $id ){
  $userId= Auth::user()->id;
  $cartProduct=Cart::where([['product_id','=',$id],['user_id','=',$userId]])->get();
  $product=Product::find($id);
  $stock=$product->stock;
  $cart= Cart::find($cartProduct->implode('id'));

    if ($stock>=1){
        if(count($cartProduct)==0){
          $cart=new Cart();
          $cart->user_id= $userId;
          $cart->product_id=$id;
          $cart->quantify++;
          $cart->save();
          $product->stock--;
          $product->save();
          return back();
                }else{

              $cart->quantify++;
              $product->stock--;
              $cart->save();
              $product->save();
              return back();
            }
          }else{
            return 'Sin Stock';
            }




}
}
