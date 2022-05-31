@extends('template')

@section('titulo')
    Histórico de estudos
@endsection

@section('conteudo')
    <ul>
        
        @foreach($estudos as $estudo)
        <li>{{$estudo->id}} - {{ date('d/m/Y H:s',strtotime($estudo->data_hora)) }} - {{ $estudo->projeto->nome}}  </li>
        @endforeach
    </ul>
@endsection