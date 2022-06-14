<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|min:1',
            'descricao' => 'required|min:1'
        ];

    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório, por favor preencher.',
            'nome.min' => 'O campo nome precisa ter ao menos 1 caractere',
            'descricao.min' => 'O campo descricao precisa ter ao menos 1 caractere'
        ];
    }
}
