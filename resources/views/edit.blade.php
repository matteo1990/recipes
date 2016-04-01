@extends('layouts.app')


@section('header')
    <div class="header">
       <h1>Stai modificando: {{ $recipe->name }} </h1>
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
 
    {!! Form::button ('Invia', ['id'=>'pressMe3', 'class'=>'btn btn-primary']) !!}
    
{!! Form::close() !!}
 
    <br /> 


@stop