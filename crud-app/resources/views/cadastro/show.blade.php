@extends('layouts.app')

@section('template_title')
    {{ $cadastro->name ?? 'Show Cadastro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cadastro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cadastros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $cadastro->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Rua:</strong>
                            {{ $cadastro->rua }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $cadastro->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Bairro:</strong>
                            {{ $cadastro->bairro }}
                        </div>
                        <div class="form-group">
                            <strong>Cidade:</strong>
                            {{ $cadastro->cidade }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cadastro->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Telefone:</strong>
                            {{ $cadastro->telefone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
