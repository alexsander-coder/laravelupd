@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detalhes Clientes</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="CPF" value="{{ $cliente->cpf }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $cliente->nome }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Data Nascimento</label>
            <input type="text" name="dt_nascimento" class="form-control" placeholder="Data Nascimento" value="{{ $cliente->dt_nascimento }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Sexo</label>
            <input class="form-control" name="sexo" placeholder="Sexo" value="{{ $cliente->sexo }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ $cliente->endereco }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" placeholder="Estado" readonly value="{{ $cliente->estado }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="Cidade" readonly value="{{ $cliente->cidade }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Data da criação</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $cliente->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Última atualização</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $cliente->updated_at }}" readonly>
        </div>
    </div>
@endsection