
@extends('layout')
@section('content')
    @if(session()->has('flash_message'))
        <script>alert("{{ session()->get('flash_message') }}")</script>
    @endif
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Aresta</div>
                    <div class="card-body">
                        <a href="{{ url('/aresta/create') }}" class="btn btn-success btn-sm" title="Adicionar Nova Aresta">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Peso</th>
                                        <th>Origem</th>
                                        <th>Destino</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($aresta as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->weight }}</td>
                                        <td>{{ $item->origin }}</td>
                                        <td>{{ $item->dest }}</td>
 
                                        <td>
                                            <a href="{{ url('/aresta/' . $item->id) }}" title="Ver aresta"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/aresta/' . $item->id . '/edit') }}" title="Editar aresta"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
 
                                            <form method="POST" action="{{ url('/aresta' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Deletar Aresta" onclick="return confirm('Deletar?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

