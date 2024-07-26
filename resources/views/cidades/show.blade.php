@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detalhes da Cidade
                    <a href="{{ route('cidades.index') }}" class="btn btn-primary float-end"><i class="bi bi-sign-turn-slight-left-fill"></i> Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label><b>ID: </b>{{ $cidade->id }}</label>
                    </div>
                    <div class="mb-3">
                        <label><b>Nome:</b> {{ $cidade->nome }}</label>
                    </div>
                    <div class="mb-3">
                        <label><b>Estado:</b> {{ $cidade->estado->uf }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
