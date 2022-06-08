@extends('template')

@section('titulo')
<i class="fa-solid fa-bolt"></i> Lista de conceitos
@endsection

@section('conteudo')
    @foreach($conceitos as $conceito)
    <div class="card mb-3">
        <div class="card-body">
            <div class="card-title">
                <h4> <i class="fa-solid fa-book"></i> {{$conceito->nome}} </div> </h4>
                
                <div class="card-text">
                    <div>Pontos de conhecimento:</div>
                    @if($conceito->pontos < 1)
                        Você ainda não tem pontos de conhecimento nessa área <i class="fa-regular fa-face-sad-tear"></i>   
                    @else
                        @for($i = 0; $i < $conceito->pontos; $i ++)
                            <i class="fa-solid fa-fire"></i>
                        @endfor
                    @endif

                </div>
                <div> 
                    <a href="{{route('form_editar_conceito',['id'=> $conceito->id])}}" class="btn btn-outline-secondary">Editar</a> 
                    <a href="{{route('remover_conceito',['id' => $conceito->id ])}}" class="btn btn-danger">Excluir</a>
                </div>
        </div>
    </div>
    @endforeach
@endsection