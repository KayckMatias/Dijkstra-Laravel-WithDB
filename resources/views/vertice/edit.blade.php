
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Editar Vértice</div>
  <div class="card-body">
      
      <form action="{{ url('vertice/' .$vertice->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$vertice->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$vertice->name}}" class="form-control"></br>
        <input type="submit" value="Atualizar" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop