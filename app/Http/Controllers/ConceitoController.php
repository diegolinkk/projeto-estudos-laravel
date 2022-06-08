<?php

namespace App\Http\Controllers;

use App\Models\Conceito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConceitoController extends Controller
{
    public function cadastro_form()
    {
        return view('conceito/cadastro');
    }

    public function cadastro(Request $request)
    {
        $conceito = new Conceito();
        $usuario = Auth::user();

        // TODO: Validar campos, vazio, campo com caracter pipipithcu
        $conceito->nome = $request->nome;
        $conceito->descricao = $request->descricao;
        $conceito->user_id = $usuario->id;
        $conceito->pontos = 0;
        $conceito->save();

        return back();
    }

    public function listar()
    {
        $conceitos = Conceito::all();
        return view('conceito/index',[
            'conceitos' => $conceitos,
        ]);
    }

    public function listarJson()
    {
        return Conceito::all();
    }

    public function form_editar($id)
    {
        $conceito = Conceito::find($id);
        return view('conceito/form-editar',[
            'conceito' => $conceito,
        ]);
    }

    public function editar( Request $request, $id)
    {
        DB::beginTransaction();
            $conceito = Conceito::find($id);
            $conceito->nome = $request->nome;
            $conceito->descricao = $request->descricao;
            $conceito->pontos = $request->pontos;

            $conceito->save();
        DB::commit();

        return redirect()->route('listar_conceitos');
    }

    public function remover($id)
    {
        $conceito = Conceito::find($id);
        $conceito->projetos()->detach();
        $conceito->delete();
        return redirect()->back();
    }
}
