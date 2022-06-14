@extends('template')

@section('titulo')
    Cadastro de conceito
@endsection

@section('conteudo')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif

    <form action="#" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection