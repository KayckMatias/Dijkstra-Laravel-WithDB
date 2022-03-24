@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Ver Aresta</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nome: {{ $aresta->name }}</h5>
        <h5 class="card-title">Peso: {{ $aresta->weight }}</h5>
        <h5 class="card-title">Origem: {{ $aresta->origin }}</h5>
        <h5 class="card-title">Destino: {{ $aresta->dest }}</h5>

  </div>
      
    </hr>
  
  </div>
</div>
@stop