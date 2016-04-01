@extends('layouts.app')
    
@section('header')
    <div class="header">
       <h1>Ecco la tua ricetta: {{ $recipe->name }} </h1>
     </div>
@stop     
           
@section('content') 


         <div class="container">
             <div class="row">
                    <u>Ricetta di:</u> {{ $recipe->users->name}}  </br> </br>
                    
                    <u>Titolo:</u> {{ $recipe->name }} </br>
              
                    <u>Procedura:</u> {{ $recipe->procedure }}  </br>
                    
                    <u>Gli ingredienti necessari per questa ricetta sono:</u> </br>
                    @foreach($recipe->ingredients as $ingredient)
                        {{ $ingredient -> name }}
                    @endforeach
            </div>
          </div> 
     
@stop 
   