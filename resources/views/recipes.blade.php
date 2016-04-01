@extends('layouts.app')


@section('header')
    <div class="header">
       <h1>Le mie ricette</h1>
     </div>
@stop

@section('content')
    
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
            

            <td>
        {!! Form::open([
            'method' => 'DELETE',
            'url' => ['recipes', $recipe->id]
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
            'route' => ['recipes.edit', $recipe->id]
        ]) !!}
            {!! Form::submit('Modifica', ['class' => 'btn btn-warning']) !!}
        {!! Form::close() !!}
            </td>

            
        </tr> 
              
     @endforeach 
     
     
    </table>
@stop