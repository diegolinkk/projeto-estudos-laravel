<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conceito extends Model
{
    use HasFactory;

    protected $fillable = ['nome','descricao','user_id'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function projetos()
    {
        return $this->belongsToMany(Projeto::class);
    }

}
