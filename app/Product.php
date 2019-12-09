<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
  
}
