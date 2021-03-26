<?php

namespace App\Http\Controllers;

use App\Models\IteracaoFase;
use Illuminate\Http\Request;

class IteracaoFaseController extends Controller
{
    public function getIteracoesFases(Request $request) {
        $query = IteracaoFase::query();
        $query->with([
            'artefatos.templates',
        ]);
        $query->where('id', $request->id);
        return $query->first();
    }
    public function updateEsforco(Request $request) {
        $iteracaoFase = IteracaoFase::find($request->id);
        $iteracaoFase->esforco = $request->esforco;
        $iteracaoFase->save();
        return $iteracaoFase;
    }
}
