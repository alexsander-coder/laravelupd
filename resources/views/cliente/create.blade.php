@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Cadastro Cliente</h1>
    <hr />
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
        <div class="col">
            <input type="number" name="cpf" class="form-control" placeholder="CPF" maxlength="11" required>
            </div>
            <div class="col">
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="M" checked>
                    <label class="form-check-label">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="F">
                    <label class="form-check-label">
                        Feminino
                    </label>
                </div>
            </div>
            <div class="col">
                <input class="form-control" name="dt_nascimento" type="date" placeholder="Data Nascimento" required>
            </div>
            <div class="col">
                <input class="form-control" name="endereco" placeholder="Endereço" required>
            </div>
            <div class="col">
                <input class="form-control" name="estado" placeholder="Estado" maxlength="2" oninput="this.value = this.value.replace(/[^A-Za-z]/g, ''); this.value = this.value.toUpperCase();" required>
            </div>
            <div class="col">
                <input class="form-control" name="cidade" placeholder="Cidade" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>

@endsection
