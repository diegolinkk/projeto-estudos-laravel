<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudo;


class EstudoController extends Controller
{
    public function listar()
    {
        $estudos = Estudo::orderBy('data_hora','desc')->get();
        return view('estudo/index',['estudos' => $estudos]);
    }
}
