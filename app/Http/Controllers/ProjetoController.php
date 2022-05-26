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

        $projeto = new Projeto();
        $projeto->nome = $nome;
        $projeto->descricao = $descricao;
        $projeto->user_id = $usuario->id;
        $projeto->save();

        //adicionando os projetos
        foreach($conceitos as $conceitoId){
            $projeto->conceitos()->attach($conceitoId);
        }

        return "cadastro realizado com sucesso - aqui vai voltar pra lista de projetos";
    }

}
