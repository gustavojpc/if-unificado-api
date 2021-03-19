<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IteracaoFase extends Model
{
    protected $table = 'iteracoes_fases';

    protected $fillable = ['fase_id', 'iteracao_id', 'esforco'];

    public function iteracoes()
    {
        return $this->belongsTo(Iteracao::class,'iteracao_id', 'id');
    }
    public function fases()
    {
        return $this->belongsTo(Fase::class, 'fase_id', 'id');
    }
    public function artefatos()
    {
        return $this->hasMany(Artefatos::class);
    }
    use HasFactory;
}
