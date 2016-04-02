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
    Route::get('/recipes/{id}', ['as' => 'recipes.show', 'uses' => 'RecipeController@show']);
    Route::get('/recipes/{id}/edit', ['as' => 'recipes.edit', 'uses' => 'RecipeController@edit']);
    Route::put('/recipe/{id}', ['as' => 'recipes.update', 'uses' => 'RecipeController@update']);
    Route::delete('recipes/{id}', ['as' => 'recipes', 'uses' => 'RecipeController@annihilate']);
    
    Route::get('new_recipes', function(){
        return view('new_recipes');
    });
    
   Route::post('sendRecipe', 'RecipeController@insertRecipes');
   
});

 

