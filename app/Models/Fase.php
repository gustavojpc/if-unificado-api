<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{

    protected $table = 'fases';

    public function iteracoesFases()
    {
        return $this->hasMany(IteracaoFase::class);
    }
    use HasFactory;
}
