@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Listagem de Estados
                        <a href="{{ url('estados/create') }}" class="btn btn-primary float-end"><i class="bi bi-plus-circle-fill"></i> Estado</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mome</th>
                                <th>UF</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estados as $estado)
                            <tr>
                                <td>{{ $estado->id }}</td>
                                <td>{{ $estado->nome }}</td>
                                <td>{{ $estado->uf }}</td>
                                <td>

                                    <a href="" class="btn btn-success mx-2"><i class="bi bi-eye-fill"></i> Visualizar</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {!! $estados->withQueryString()->links('pagination::bootstrap-5') !!}

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
