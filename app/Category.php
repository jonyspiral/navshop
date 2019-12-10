<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public $table= "categories";
    public $guarded =[];
    // public $primaryKey = "id";
    // public $timesstamps =false;
    public function Products(){
      return $this->hasMany("App\Product","category_id");
    }
}
