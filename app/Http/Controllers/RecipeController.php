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
    
    public function show($id){
        $recipe = \App\Recipe::find($id);
        return view('show')->with('recipe', $recipe);
    }
    
    
    public function annihilate($id){
        $recipe = \App\Recipe::find($id);
        $recipe->delete();
        
        return redirect('recipes');
        
    }
    
   public function edit($id)
    {
    $recipe = \App\Recipe::find($id);

    return view('edit')->withRecipe($recipe);
    
    }
    
    public function insertRecipes(Request $request){
     
        $user_id = Auth::user()->id;
        $recipe = \App\Recipe::create([ 'name'=>$request->newRecipeName, 
                                        'procedure'=>$request->newRecipeProcedure, 
                                        'user_id'=>$user_id]);
                                        
           foreach($request->addIngredients as $ingredient){
                $ingr = \App\Ingredient::where('name', '=', $ingredient)->first();

                if ($ingr == null) {
                    $ingr = \App\Ingredient::create(['name'=>$ingredient]);
                }
                      
                $pivot = \App\Recipe_Ingredient::create(['recipes_id'=>$recipe->id,'ingredients_id'=>$ingr->id]);
                    
           }
    
       
        
    }
    
}