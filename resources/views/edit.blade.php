@extends('layouts.app')


@section('header')
    <div class="header">
       <h1>Stai modificando: {{ $recipe->name }} </h1>
     </div>
@stop

@section('content')

{{ Form::model($recipe, array('route' => array('recipes.update', $recipe->id), 'method' => 'PUT')) }}
 
   <div class='row'>
        {!! Form::label('name', 'Nome della ricetta') !!}
        {!! Form::text ('name', null, array('class'=>'form-control')) !!}
    </div>

    <br /> 
    
    <div class='row'>
        {!! Form::label('procedure', 'Come si fa?') !!}
        {!! Form::textarea('procedure', null, array('class'=>'form-control')) !!}
    </div> 
    <br /> 
    
    
  <!--  {!! Form::button ('Invia', [ 'class'=>'btn btn-primary']) !!} -->
    
    
    {{ Form::submit('Modifica', array('class' => 'btn btn-primary')) }}
{!! Form::close() !!}


@stop