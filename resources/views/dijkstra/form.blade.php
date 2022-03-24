
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Ver Gráfico</div>
  <div class="card-body">
      
      <form action="{{ url('dijkstra') }}" method="get">
        @csrf
        <label>Origem</label></br>
        <input type="text" name="start" id="start" class="form-control"></br>
        <label>Destino</label></br>
        <input type="text" name="end" id="end" class="form-control"></br>
        <input type="submit" value="Ver" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop