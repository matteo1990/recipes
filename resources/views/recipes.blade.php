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
               <span class="table_title"> Procedura</span>
            </td>
            <td>
              <span class="table_title"> Id dell'autore</span>
            </td>
        </tr>
         @foreach($recipes as $recipe)
        <tr>
            <td>
               {{ $recipe->name }}
            </td>
        
            <td>
                {{ $recipe->procedure }}
            </td>
            <td>
                {{ $recipe->user_id }}
            </td>
            
            <td>
        {!! Form::open([
            'method' => 'DELETE',
            'url' => ['recipes', $recipe->id]
        ]) !!}
            {!! Form::submit('cancella', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
            </td>
            
        </tr> 
              
     @endforeach 
    </table>
@stop