@extends('template')

@section('titulo')
form editar conceito
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

<form method='POST' action='#'>
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$conceito->nome}}">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$conceito->descricao}}">
    </div>
    <div class="mb-3">
        <label for="pontos" class="form-label">Pontos: </label>
        <input type="number" name="pontos" id="pontos" class="form-control" value="{{$conceito->pontos}}">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection