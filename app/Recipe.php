<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
     protected $fillable = [
        'name', 'procedure', 'user_id'
    ];
    
    public function users(){
        return $this->belongsTo('app\User', 'foreign key');
    }
    
      public function ingredients(){
        return $this->belongsToMany('app\Ingredient', 'recipe_ingredient');
    }
}
