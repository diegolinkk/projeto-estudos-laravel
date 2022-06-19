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
                        <ul>
                            <li>{{$conceito->nome}}</li>
                        </ul>
                        
                    @endforeach
                @endif

                <div> 
                    <a href="{{route('estudar',['id' => $projeto->id ])}}" class="btn btn-outline-primary"> <i class="fa-solid fa-book"></i> estudar</a>
                    <a href="{{route('form_editar_projeto',['id'=> $projeto->id ])}}" class="btn btn-outline-secondary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                    <a 
                    onclick="return confirm('Tem certeza que deseja remover o projeto?');" 
                    href="{{route('remover_projeto',['id' => $projeto->id ])}}" 
                    class="btn btn-outline-danger"> <i class="fa-solid fa-trash"></i> Remover</a> 
                    <a onclick="return confirm('tem certeza que deseja concluir o projeto?');"
                    href="{{route('concluir_projeto',['id' => $projeto->id])}}" 
                    class="btn btn-outline-primary"> <i class="fa-solid fa-check"></i> Concluir Projeto</a>
                </div>

            </div>
        </div>
        @endforeach
@endsection