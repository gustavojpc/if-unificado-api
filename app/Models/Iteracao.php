<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iteracao extends Model
{

    protected $table = 'iteracoes';
    protected $fillable = ['projeto_id', 'ordem'];

    public function projetos()
    {
        return $this->belongsTo(Projeto::class);
    }
    public function iteracoesFases()
    {
        return $this->hasMany(IteracaoFase::class);
    }
    public static function createIteracao($projetoId) {
        $totalIteracoes = Iteracao::where('projeto_id', $projetoId)->get();
        $totalIteracoes = $totalIteracoes->count();
        $iteracao = Iteracao::create([
            'projeto_id' => $projetoId,
            'ordem' => $totalIteracoes + 1,
        ]);
        Iteracao::afterCreateIteracao($iteracao->id);
    }

    public static function afterCreateIteracao($iteracaoId) {
        $fases = Fase::all();
        foreach($fases as $fase) {
            $iteracaoFase = IteracaoFase::create([
                'fase_id' => $fase->id,
                'iteracao_id' => $iteracaoId,
                'esforco' => rand(1,99),
            ]);
            Artefatos::createArtefatos($fase->id, $iteracaoFase->id);
        }
    }
    use HasFactory;
}
