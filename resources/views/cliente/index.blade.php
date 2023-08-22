@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listar usuários</h1>
        <a href="{{ route('cliente.create') }}" class="btn btn-primary">Criar usuário</a>
    </div>

    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <form action="{{ route('cliente.search') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="cpf" class="form-control" placeholder="Digite o CPF">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>Sexo</th>
                <th>Endereço</th>
                <th>Estado</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            @if($clientes->count() > 0)
                @foreach($clientes as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->cpf }}</td>
                        <td class="align-middle">{{ $rs->nome }}</td>
                        <td class="align-middle">{{ $rs->dt_nascimento }}</td>
                        <td class="align-middle">{{ $rs->sexo }}</td>
                        <td class="align-middle">{{ $rs->endereco }}</td>
                        <td class="align-middle">{{ $rs->estado }}</td>
                        <td class="align-middle">{{ $rs->cidade }}</td>

                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('cliente.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalhes</a>
                                <a href="{{ route('cliente.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('cliente.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Cliente não encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
    {{ $clientes->links() }}
</div>
@endsection
