@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Editar Cliente</h1>
    <hr />
    <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" placeholder="CPF" value="{{ $cliente->cpf }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $cliente->nome }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Data Nascimento</label>
                <input type="text" name="dt_nascimento" class="form-control" placeholder="Data Nascimento" value="{{ $cliente->dt_nascimento }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Sexo</label>
                <input type="text" name="sexo" class="form-control" placeholder="Sexo" value="{{ $cliente->sexo }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Endereco</label>
                <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ $cliente->endereco }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado" placeholder="Estado" value="{{ $cliente->estado }}">
            </div>
             <div class="col mb-3">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" placeholder="Cidade" value="{{ $cliente->cidade }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection