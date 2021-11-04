@extends('layouts.template')
@section('title', 'Universidade')
@section('content')

<div class="container">
    <div>
       <h1>Universidades</h1>
    </div>
    <div class="float-right">
        <a href="{{url('universidade/create')}}" class="btn btn-primary">Inserir Universidade</a>
    </div>

        <div class="p-5">
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sigla</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($universidades as $universidade)
                            <tr>
                                <th scope="row">{{$universidade->id}}</th>
                                <td>{{$universidade->nomeuni}}</td>
                                <td class="text-uppercase">{{$universidade->sigla}}</td>
                                <td>
                                    <a title ="Detalhes da Universidade" href = "{{url('universidade/show',$universidade->id )}}"><i class="fas fa-eye text-primary mr-1"></i></a>
                                    <a title ="Editar Universidade" href = "{{url('universidade/edit',$universidade->id )}}"><i class="fas fa-edit text-info mr-1"></i></a>
                                    <a href="{{url('universidade/delete',$universidade->id)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>

@endsection



