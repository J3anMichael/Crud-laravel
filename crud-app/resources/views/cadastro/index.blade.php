@extends('layouts.app')

@section('template_title')
    Cadastro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cadastros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cadastros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Criar Novo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Nome</th>
										<th>Rua</th>
										<th>Numero</th>
										<th>Bairro</th>
										<th>Cidade</th>
										<th>Estado</th>
										<th>Telefone</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cadastros as $cadastro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cadastro->nome }}</td>
											<td>{{ $cadastro->rua }}</td>
											<td>{{ $cadastro->numero }}</td>
											<td>{{ $cadastro->bairro }}</td>
											<td>{{ $cadastro->cidade }}</td>
											<td>{{ $cadastro->estado }}</td>
											<td>{{ $cadastro->telefone }}</td>

                                            <td>
                                                <form action="{{ route('cadastros.destroy',$cadastro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cadastros.show',$cadastro->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cadastros.edit',$cadastro->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cadastros->links() !!}
            </div>
        </div>
    </div>
@endsection
