<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Category;
use Auth;
class Cart extends Model
{

  public $guarded =[];

  public function getPriceTotal(){
    $priceTotal=$product->price* $this->quantify;
    return $priceTotal;
  }
  public function product(){
    return $this->belongsto("App\Product","product_id");
  }


}
