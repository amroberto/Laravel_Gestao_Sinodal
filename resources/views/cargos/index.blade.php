@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Listagem de Cargos
                        <a href="{{ url('cargos/create') }}" class="btn btn-primary float-end"><i class="bi bi-plus-circle-fill"></i> Cargo</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cargos as $key => $cargo)
                            <tr>
                                <td>{{ $cargo['id'] }}</td>
                                <td>{{ $cargo['nome'] }}</td>
                                <td>
                                    <a href="{{ route('cargos.show', $cargo['id']) }}" class="btn btn-success mx-2"><i class="bi bi-eye-fill"></i> Visualizar</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {!! $cargos->withQueryString()->links('pagination::bootstrap-5') !!}

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
