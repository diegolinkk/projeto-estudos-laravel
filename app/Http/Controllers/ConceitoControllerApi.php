<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conceito;
use App\Interfaces\ConceitoRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ConceitoControllerApi extends Controller
{

    private ConceitoRepositoryInterface $conceitoRepository;

    public function __construct(ConceitoRepositoryInterface $conceitoRepository)
    {
        $this->conceitoRepository = $conceitoRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->conceitoRepository->getAllConceitos()
        ]);
    }


    public function store(Request $request): JsonResponse
    {

        $conceitoDetails = $request->only([
            'nome',
            'descricao',
            'user_id'
        ]);

        return response()->json([
            'data' => $this->conceitoRepository->createConceito($conceitoDetails)
        ],
        Response::HTTP_CREATED
    );
    }


    public function show($id): JsonResponse
    {
        $conceitoId = $id;
        return response()->json([
            'data' => $this->conceitoRepository->getConceitoById($conceitoId)
        ]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $conceitoId = $id;
        $conceitoDetails = $request->only([
            'nome',
            'descricao',
        ]);

        return response()->json([
            'data' => $this->conceitoRepository->updateConceito($conceitoId,$conceitoDetails)
        ]);
    }

    public function destroy($id): JsonResponse
    {
        $conceitoId = $id;
        $this->conceitoRepository->deleteConceito($conceitoId);
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
