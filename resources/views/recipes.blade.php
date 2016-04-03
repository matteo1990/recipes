@extends('layouts.app')


@section('header')
    <div class="header">
       <h1>Le mie ricette</h1>
     </div>
@stop

@section('content')
    
    Ciao {{ Auth::user()->name }}! 
    <br />
    Ecco l'elenco di tutte le ricette inserite fino ad ora.
    <br /> <br />
    
    <table>
    
         <tr>
            <td>
               <span class="table_title">Nome ricetta</span>
            </td>
        
            <td>
              <span class="table_title"> Nome dell'autore</span>
            </td>
        
        </tr>
         @foreach($recipes as $recipe)
        <tr>
            <td>
               {{ $recipe->name }}
            </td>
        
            <td>
                {{ $recipe->users->name}}
            </td>
            
         
            
        @if(Auth::user()->id == $recipe->user_id)
            <td>
        {!! Form::open([
            'method' => 'DELETE',
            'url' => ['recipes', $recipe->id],
            'id'=>'deleteButton'
        ]) !!}
            {!! Form::submit('Cancella', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
            </td>
            <td>
        {!! Form::open([
            'method' => 'get',
            'route' => ['recipes.show', $recipe->id]
        ]) !!}
            {!! Form::submit('Leggi', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
            </td>
            <td>
        {!! Form::open([
            'method' => 'get',
            'route' => ['recipes.edit', $recipe->id],
            'id'=>'editButton'
        ]) !!}
            {!! Form::submit('Modifica', ['class' => 'btn btn-warning']) !!}
        {!! Form::close() !!}
            </td>
            
            
            @else 
            
            <td>
        {!! Form::open([
            'method' => 'DELETE',
            'url' => ['recipes', $recipe->id],
            'id'=>'deleteButton'
        ]) !!}
            {!! Form::submit('Cancella', ['class' => 'btn btn-danger', 'disabled']) !!}
        {!! Form::close() !!}
            </td>
            <td>
        {!! Form::open([
            'method' => 'get',
            'route' => ['recipes.show', $recipe->id]
        ]) !!}
            {!! Form::submit('Leggi', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
            </td>
            <td>
        {!! Form::open([
            'method' => 'get',
            'route' => ['recipes.edit', $recipe->id],
            'id'=>'editButton'
        ]) !!}
            {!! Form::submit('Modifica', ['class' => 'btn btn-warning', 'disabled']) !!}
        {!! Form::close() !!}
            </td>
            
        @endif
                    
        </tr> 
              
     @endforeach 
     
     
    </table>
@stop