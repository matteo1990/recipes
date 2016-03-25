<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe_Ingredient extends Model
{
    protected $table = "recipe_ingredient";
   
    protected $fillable = ['ingredients_id','recipes_id']
}
