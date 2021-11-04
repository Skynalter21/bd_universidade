@extends('layouts.template')
@section('title', 'Criar Universidade')
@section('content')

    <div class="container p-5">
        <div>
            <h1>Criar Universidade</h1>
        </div>
        <form name="universidade-creation-form" method="post" action="{{ route('universidade/create') }}">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="nomeuni">Nome</label>
                    <input type="text" class="form-control" id="nomeuni" name="nomeuni" placeholder="Nome da Universidade">
                </div>
                <div class="form-group col-2">
                    <label for="sigla">Sigla</label>
                    <input type="text" class="form-control" id="sigla" name="sigla" placeholder="Sigla">
                </div>
            </div>
            <div class="col p-4">
                <button type="submit" class="btn btn-primary universidade-creation-submit">Salvar</button>
            </div>
        </form>
    </div>
@endsection
