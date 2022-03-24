
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Criar Vértice</div>
  <div class="card-body">
      
      <form action="{{ url('vertice') }}" method="post">
        @csrf
        <label>Nome</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <input type="submit" value="Adicionar" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop