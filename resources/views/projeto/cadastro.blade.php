@extends('template')

@section('titulo')
Cadastro de Projeto
@endsection
@section('conteudo')

    <form action="#" method="post">
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
                <input type="checkbox" name="conceitos[]" id="conceito-{{$loop->count}}" class="form-check-input" value="{{$conceito->id}}">
                <label for="conceito-{{$loop->count}}" class="form-check-label">{{$conceito->nome}}</label>
            </div>
            @endforeach

        </div>
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </form>
@endsection