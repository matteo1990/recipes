<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name'
    ];
    
     public function recipes(){
        return $this->belongsToMany('app\Recipe', 'recipe_ingredient');
    }
}
