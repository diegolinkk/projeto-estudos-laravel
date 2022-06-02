@extends('template')

@section('titulo')
Lista de projetos
<i class="fa-solid fa-bars-progress"></i>
@endsection

@section('conteudo')

        @foreach($projetos as $projeto)
        <div class="card mb-3 {{$projeto->nome}}">
           <div class="card-header">
           {{$projeto->nome}} 
           </div>
            
           <div class="card-body">
               
                @if(count($projeto->conceitos) >= 1)
                    <h5 class="card-title">Conceitos:</h5>
                
                    @foreach($projeto->conceitos as $conceito)
                        <div>
                            {{$conceito->nome}}
                        </div>
                    @endforeach
                @endif

                <div> 
                    <a href="{{route('estudar',['id' => $projeto->id ])}}" class="btn btn-outline-primary">estudar</a> 
                </div>

            </div>
        </div>
        @endforeach
@endsection