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
                    <form action="{{ route('cidades.search') }}" method="GET">
                        <input type="text" name="search" placeholder="Pesquisar cidade">
                        <button class="btn btn-success" type="submit">Pesquisar</button>
                    </form>
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
                        @if (count($results > 0))
                        <tbody>
                            @foreach ($cidades as $key => $cidade)
                            <tr>
                                <td>{{ $cidade['id'] }}</td>
                                <td>{{ $cidade['nome'] }}</td>
                                <td>{{ $cidade['codigo_ibge'] }}</td>
                                <td>{{ $cidade->estado->nome }}</td>
                                <td>
                                    <a href="{{ route('cidades.show', $cidade['id']) }}" class="btn btn-success mx-2"><i class="bi bi-eye-fill"></i> Visualizar</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {!! $cidades->withQueryString()->links('pagination::bootstrap-5') !!}
                    @else
                        <p>Nenhum resultado encontrado!</p>
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
