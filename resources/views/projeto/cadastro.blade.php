@extends('template')

@section('titulo')
Cadastro de Projeto
@endsection
@section('conteudo')

    <form action="#" method="post">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>

        <!-- checkbox dos conceitos -->
        <div class="mb-3">
            <h5>Conceitos</h5>
            @foreach($conceitos as $conceito)
            <div class="form-check">
                <input type="checkbox" name="conceitos[]" id="conceito-{{$loop->iteration}}" class="form-check-input" value="{{$conceito->id}}">
                <label for="conceito-{{$loop->iteration}}" class="form-check-label">{{$conceito->nome}}</label>
            </div>
            @endforeach

        </div>
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </form>
@endsection