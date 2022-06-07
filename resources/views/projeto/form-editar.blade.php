@extends('template')

@section('titulo')
Editar
@endsection

@section('conteudo')
<form action="#" method="post">
    
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$projeto->nome}}">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$projeto->descricao}}">
    </div>

    <div class="mb-3">
        @foreach($conceitos as $conceito)
            <div class="form-check">
                <input type="checkbox" name="conceitos[]" id="conceito-{{$loop->iteration}}" class="form-check-input" value="{{$conceito->id}}"
                {{ in_array($conceito->id, $id_conceitos_do_projeto) ? 'checked' : ''}}
                >
                <label for="conceito-{{$loop->iteration}}" class="form-check-label">{{$conceito->nome}}</label>
            </div>
        @endforeach
    </div>

    <button type="submit"  class="btn btn-primary" >Enviar</button>
</form>
@endsection