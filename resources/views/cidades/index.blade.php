@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Listagem de Cidades
                        <a href="{{ route('cidades.create') }}" class="btn btn-primary float-end"><i class="bi bi-plus-circle-fill"></i> Cidade</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('cidades.index') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" placeholder="Pesquisar cidade" value="{{ request('search') }}" class="form-control">
                            <button class="btn btn-success" type="submit">Pesquisar</button>
                        </div>
                    </form>
                    @if($cidades->count() > 0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Código IBGE</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cidades as $cidade)
                            <tr>
                                <td>{{ $cidade->id }}</td>
                                <td>{{ $cidade->nome }}</td>
                                <td>{{ $cidade->codigo_ibge }}</td>
                                <td>{{ $cidade->estado->uf }}</td>
                                <td>
                                    <a href="{{ route('cidades.show', $cidade->id) }}" class="btn btn-success mx-2"><i class="bi bi-eye-fill"></i> Visualizar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $cidades->appends(['search' => request('search')])->links('pagination::bootstrap-5') !!}
                    @else
                        <p>Nada foi encontrado</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
