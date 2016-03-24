<?php



Route::group(['middleware' => 'web'], function () {
    Route::auth();
});


Route::group(['middleware' => ['web','auth']], function () {
    
    Route::get('/', function () {
        return view('index');
    });
    
    Route::get('/index', function(){
        return view('index');
        
    });
    
    Route::get('/recipes', ['as' => 'recipe', 'uses' => 'RecipeController@read']);

    Route::delete('recipes/{id}', ['as' => 'recipe', 'uses' => 'RecipeController@annihilate']);
    
    Route::get('new_recipes', function(){
        return view('new_recipes');
    });
    
   Route::post('sendRecipe', 'RecipeController@insertRecipes');
   
   Route::post('sendIngredient', 'RecipeController@insertIngredients');
});

 

