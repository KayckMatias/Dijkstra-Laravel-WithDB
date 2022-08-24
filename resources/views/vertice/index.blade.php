@extends('layout')
@section('content')

@if(session()->has('flash_message'))
<div class="alert alert-primary" role="alert">{{ session()->get('flash_message') }}</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Vértices</div>
                <div class="card-body">
                    <a href="{{ url('/vertice/create') }}" class="btn btn-success btn-sm" title="Adicionar Nova Vértice">
                        <i class="fa fa-plus" aria-hidden="true"></i> Adicionar
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vertice as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>

                                    <td>
                                        <a href="{{ url('/vertice/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                        <a href="{{ url('/vertice/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                        <form method="POST" action="{{ url('/vertice' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" title="Deletar Contato" onclick="return confirm('Deletar?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
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