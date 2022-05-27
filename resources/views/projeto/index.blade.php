@extends('template')

@section('titulo')
Lista de projetos
@endsection

@section('conteudo')
    <ul>
        
        @foreach($projetos as $projeto)
        <li>
            {{$projeto->nome}}
            
            <ul>
            @foreach($projeto->conceitos as $conceito)
                <li>{{$conceito->nome}} </li>
            @endforeach
            </ul>
            
        </li>
        @endforeach
    </ul>
@endsection