<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class RecipeController extends Controller
{
    public function ficcaRicette(Request $request){
     
        $user_id = Auth::user()->id;
        
        $recipe = \App\Recipe::create([ 'name'=>$request->newRecipeName, 
                                        'procedure'=>$request->newRecipeProcedure, 
                                        'user_id'=>$user_id]);
    }
    
    public function ficcaIngredienti(Request $request){
        
        $ingredient = \App\Ingredient::create(['name'=>$request->addIngredients,
            ]);
    }
    

}