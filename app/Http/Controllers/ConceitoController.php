<?php

namespace App\Http\Controllers;

use App\Models\Conceito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $conceito->nome = $request->nome;
        $conceito->descricao = $request->descricao;
        $conceito->user_id = $usuario->id;
        $conceito->pontos = 0;
        $conceito->save();


        return back();
    }
}
