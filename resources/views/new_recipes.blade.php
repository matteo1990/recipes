@extends('layouts.app')


@section('header')
    <div class="header">
       <h1>Aggiungi una ricetta!</h1>
     </div>
@stop

@section('content')
      <form>
  <fieldset class="form-group">
    <label for="recipeTitle">Nome della ricetta</label>
    <input type="text" class="form-control" id="recipeTitle" placeholder="Nome della ricetta">
    <small class="text-muted">...e che sia buona!</small>
  </fieldset>
 
  <fieldset class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="Textarea">Inserisci qui il procedimento</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </fieldset>
 
  

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop