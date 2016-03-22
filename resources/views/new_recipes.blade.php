@extends('layouts.app')
  
@section('header')
    <div class="header">
       <h1>Aggiungi una ricetta!</h1>
     </div>
@stop

@section('content')

{!! Form::open(['url' => 'sendRecipe', 'method'=>'post']) !!}
  
    <div class='row'>
        {!! Form::label('Nome della ricetta') !!}
        {!! Form::text ('name', null,['id'=>'name', 'class'=>'form-control']) !!}
    </div>
    <br /> 
    
    <div class='row'>
        {!! Form::label('Come si fa?') !!}
        {!! Form::textarea('procedure', null, ['id'=>'procedure', 'class'=>'form-control', 'rows'=>'3']) !!}
    </div> 
    <br />
 
    {!! Form::button ('Invia', ['id'=>'pressMe1', 'class'=>'btn btn-primary', 'disabled']) !!}
    
{!! Form::close() !!}
 
    <br /> 

{!! Form::open(['url' => 'sendIngredient', 'method'=>'post']) !!}
    <div class='row'>
      {!! Form::label("inserisci qui il nome dell'ingrediente") !!}
      {!! Form::text('ingredients', null, ['class'=>'form-control', 'id'=>'ingrName']) !!}
    </div>
  
    <br /> 
  
      {!! Form::button ('Invia', ['id'=>'pressMe2', 'class'=>'btn btn-primary', 'disabled']) !!}

    <div id="ingredients_list"> </div>
  
{!! Form::close() !!}  

@stop