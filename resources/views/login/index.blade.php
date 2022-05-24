@extends('template')

@section('titulo')
    Formulário de login
@endsection

@section('conteudo')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

    
    <form action="#" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">E-mail: </label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha: </label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <a href="{{route('cadastro_de_usuario')}}">Cadastro de usuário</a>
@endsection