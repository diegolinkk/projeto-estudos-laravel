<?php

namespace App\Interfaces;

interface ConceitoRepositoryInterface
{
    public function getAllConceitos();
    public function getConceitoById($conceitoId);
    public function deleteConceito($conceitoId);
    public function createConceito(array $conceitoDetails);
    public function updateConceito($conceitoId,array $newDetails);
}