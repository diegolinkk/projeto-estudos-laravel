@extends('template')

@section('titulo')
<i class="fa-solid fa-clock"></i> Histórico de estudos
@endsection

@section('conteudo')

<table class="table">
    <thead>
        <th scope="col">#</th>
        <th scope="col">Data e Hora</th>
        <th scope="col">Projeto</th>
    </thead>
    <tbody>
        @foreach($estudos as $estudo)
        <tr>
            <th scope="row">{{$estudo->id}}</th>
            <td>{{date('d/m/Y H:s', strtotime($estudo->data_hora)) }}</td>
            <td>{{$estudo->projeto->nome}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection