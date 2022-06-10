<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conceito;

class ConceitoControllerApi extends Controller
{

    public function index()
    {
        return Conceito::all();
    }


    public function store(Request $request)
    {
        Conceito::create($request->all());
    }


    public function show($id)
    {
        return Conceito::find($id);
    }

    public function update(Request $request, $id)
    {
        $conceito = Conceito::find($id);
        $conceito->update($request->all());
    }

    public function destroy($id)
    {
        $conceito = Conceito::find($id);
        $conceito->delete();
    }
}
