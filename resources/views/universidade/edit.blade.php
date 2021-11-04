@extends('layouts.template')
@section('title', 'Editar Universidade')
@section('content')

<div class="container p-5">
        <div>
            <h1>Editar {{ $universidade->nomeuni }}</h1>
        </div>

        <form name="universidade-updating-form" method="post" action="{{ route('universidade/edit', $universidade) }}">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="nomeuni">Nome</label>
                    <input type="name" class="form-control" id="nomeuni" name="nomeuni" value="{{ $universidade->nomeuni }}"  placeholder="Nome da Universidade">
                </div>
                <div class="form-group col-2">
                    <label for="sigla">Sigla</label>
                    <input type="name" class="form-control" id="sigla" name="sigla" value="{{ $universidade->sigla }}" placeholder="Sigla">
                </div>
            </div>
            <div class="col p-4">
                <button type="submit" class=" btn btn-primary universidade-updating-submit">Salvar Edição</button>
            </div>

        </form>

</div>

@endsection
