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
    <input id="name" type="text" class="form-control" >
  </fieldset>
 
  
  <fieldset class="form-group">
    <label for="Textarea">Inserisci qui il procedimento</label>
    <textarea id="text" class="form-control" rows="3"></textarea>
  </fieldset>
 
    
  
  <!--
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
  -->
  </form>
 
  <button id="pressMe1" class="btn btn-primary" disabled>Submit</button>
  <br /> <br />
  
  
 

<form>
      <fieldset class="form-group">
          <label>Inserisci qui il nome dell'ingrediente</label>
          <input class="form-control" id="ingrName">
      </fieldset>
</form>      
      <button id="pressMe2" class="btn btn-primary" disabled>Submit</button>
      
      <div id="ingredients_list"> </div>



 
 
@stop