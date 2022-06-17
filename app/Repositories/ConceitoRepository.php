<?php

namespace App\Repositories;
use App\Interfaces\ConceitoRepositoryInterface;
use App\Models\Conceito;

class ConceitoRepository implements ConceitoRepositoryInterface
{
    public function getAllConceitos()
    {
        return Conceito::all();
    }

    public function getConceitoById($conceitoId)
    {
        return Conceito::findOrFail($conceitoId);
    }

    public function deleteConceito($conceitoId)
    {
        Conceito::destroy($conceitoId);
    }

    public function createConceito(array $conceitoDetails)
    {
        return Conceito::create($conceitoDetails);
    }

    public function updateConceito($conceitoId, array $newDetails)
    {
        return Conceito::whereId($conceitoId)->update($newDetails);
    }
}