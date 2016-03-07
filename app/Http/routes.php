<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
    return view('index');
    
});

Route::get('/contact', 'WelcomeController@Contact');














Route::group(['middleware' => ['web']], function () {
    //
});
