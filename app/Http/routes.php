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
    
    Route::get('new_recipes', function(){
        return view('new_recipes');
    });
    
    Route::post('sendRecipe', 'HomeController@ficcaRicette');
   
});

