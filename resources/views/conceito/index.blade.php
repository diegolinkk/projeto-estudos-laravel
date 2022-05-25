@extends('template')

@section('titulo')
Lista de conceitos
@endsection

@section('conteudo')
    <ul>
        @foreach($conceitos as $conceito)
        <li> {{$conceito->nome}} </li>  
        @endforeach
    </ul>
@endsection