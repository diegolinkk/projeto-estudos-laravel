@extends('template')

@section('titulo')
Cadastro de usuário
@endsection

@section('conteudo')
<form action="#" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha:</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<a href="{{route('login')}}">login</a>
@endsection