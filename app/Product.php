<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{
  // public $table= "categories";
  public $guarded =[];
  // public $primaryKey = "id";
  // public $timesstamps =false;
  public function getpriceOff(){
    $priceOff=$this->price* (1-$this->discount/100);
    return $priceOff;
  }
  public function category(){
    return $this->belongsto("App\Category","category_id");
  }
  

}
