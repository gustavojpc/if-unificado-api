<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['nome','user_id', 'descricao'];

    protected $table = 'projetos';

    public function iteracoes()
    {
        return $this->hasMany(Iteracao::class);
    }

    use HasFactory;
}
