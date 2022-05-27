<?php

namespace App\Http\Controllers;

use App\Models\Conceito;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{
    public function cadastro_form()
    {
        $conceitos = Conceito::all();
        return view('projeto/cadastro',[
            "conceitos" => $conceitos   
        ]);
    }

    public function cadastro(Request $request)
    {
        //pegando dados - ok
        $nome = $request->nome;
        $descricao = $request->descricao;
        $conceitos = $request->conceitos;
        $usuario = Auth::user();

        //salvando um projeto
        $projeto = new Projeto();
        $projeto->nome = $nome;
        $projeto->descricao = $descricao;
        $projeto->user_id = $usuario->id;
        $projeto->save();

        //adicionando os conceitos
        //repare que eu adiciono o ID do conceito
        //repare que eu fiz os attaches depois de criar o projeto na linha 33
        foreach($conceitos as $conceitoId){
            $projeto->conceitos()->attach($conceitoId);
        }

        return redirect()->route('listar_projetos');
    }

    public function listar()
    {
        $projetos = Projeto::all();
        return view('projeto/index',[
            'projetos' => $projetos,
        ]);
    }

}
