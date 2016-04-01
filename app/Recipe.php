<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
     protected $fillable = [
        'name', 'procedure', 'user_id'
    ];
    
    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
      public function ingredients(){
        return $this->belongsToMany('App\Ingredient', 'recipe_ingredient', 'recipes_id', 'ingredients_id');
    }
}
