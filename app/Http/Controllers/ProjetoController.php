<?php

namespace App\Http\Controllers;

use App\Models\Conceito;
use App\Models\Estudo;
use App\Models\Projeto;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function estudar($id)
    {
        
        $projeto = Projeto::find($id);

        DB::beginTransaction();

        //salvando o log de estudo
        $estudo = new Estudo();
        $estudo->projeto_id = $projeto->id;
        $estudo->data_hora = new DateTime();
        $estudo->save();

        //clicando +1 em cada conceito
        $projeto->conceitos->each(function(Conceito $conceito){
            $conceito->pontos +=1;
            $conceito->save();
        });

        DB::commit(); 
        return redirect()->route('listar_projetos');
    }

    public function remover($id)
    {
        DB::beginTransaction();
            //removendo estudos relacionados ao projeto
            $estudos = Estudo::where('projeto_id',$id)->get();
            foreach($estudos as $estudo){
                $estudo->delete();
            }

            $projeto = Projeto::find($id);

            //removendo todos os conceitos relacionados
            $projeto->conceitos()->detach();
            $projeto->delete();
        DB::commit();
        
        return redirect()->back();
    }
}
