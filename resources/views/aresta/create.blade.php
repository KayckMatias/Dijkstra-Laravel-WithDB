
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Criar Aresta</div>
  <div class="card-body">
      
      <form action="{{ url('aresta') }}" method="post">
        @csrf
        <label>Nome</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Peso</label></br>
        <input type="text" name="weight" id="weight" class="form-control"></br>
        <label>Origem</label></br>
        <input type="text" name="origin" id="origin" class="form-control"></br>
        <label>Destino</label></br>
        <input type="text" name="dest" id="dest" class="form-control"></br>
        <input type="submit" value="Adicionar" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop