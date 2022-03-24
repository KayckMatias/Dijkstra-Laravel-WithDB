
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Editar Aresta</div>
  <div class="card-body">
      
      <form action="{{ url('aresta/' .$aresta->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$aresta->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$aresta->name}}" class="form-control"></br>
        <label>Peso</label></br>
        <input type="text" name="weight" id="weight" value="{{$aresta->weight}}" class="form-control"></br>
        <label>Origem</label></br>
        <input type="text" name="origin" id="origin" value="{{$aresta->origin}}" class="form-control"></br>
        <label>Destino</label></br>
        <input type="text" name="dest" id="dest" value="{{$aresta->dest}}"  class="form-control"></br>
        <input type="submit" value="Atualizar" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop