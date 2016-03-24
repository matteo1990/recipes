<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;

class RecipeController extends Controller
{
    
    public function read(){
        $recipes = \App\Recipe::all();

        return view('recipes',['recipes' => $recipes]);
    } 
    
    
    public function annihilate($id){
        $recipe = Recipe::find($id);
        $recipe->delete();
        
        return redirect('recipes');
        
    }
    
    public function insertRecipes(Request $request){
     
        $user_id = Auth::user()->id;
        
        $recipe = \App\Recipe::create([ 'name'=>$request->newRecipeName, 
                                        'procedure'=>$request->newRecipeProcedure, 
                                        'user_id'=>$user_id]);
    }
    
    public function insertIngredients(Request $request){
        
        $ingredient = \App\Ingredient::create(['name'=>$request->addIngredients]);
    }
    

}