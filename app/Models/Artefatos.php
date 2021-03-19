<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artefatos extends Model
{
    protected $table = 'artefatos';

    protected $fillable = ['template_id','iteracao_fase_id'];

    public function templates() {
        return $this->belongsTo(Templates::class, 'template_id');
    }
    public function iteracaoFase() {
        return $this->belongsTo(IteracaoFase::class, 'iteracao_fase_id');
    }
    public function artefatosTitulos() {
        return $this->hasMany(ArtefatosTitulos::class, 'artefato_id');
    }

    public static function createArtefatos($faseId, $iteracaoFaseId) {
        $templates = Templates::where('fase_id', $faseId)->get();
        foreach($templates as $template) {
            $artefato = Artefatos::create([
                'template_id' => $template->id,
                'iteracao_fase_id' => $iteracaoFaseId,
            ]);
            self::createTitulos($artefato->id, $template->id);
        }
    }

    public static function createTitulos($artefatoId, $templateId) {
        $titulos = Titulo::where('template_id', $templateId)->get();
        foreach($titulos as $titulo) {
            $artefatoTitulo = ArtefatosTitulos::create([
                'artefato_id' => $artefatoId,
                'titulo_id' => $titulo->id,
            ]);
            self::createSubtitulos($artefatoTitulo->id, $titulo->id);
        }
    }

    public static function createSubtitulos($artefatoTituloId, $tituloId) {
        $subtitulos = Subtitulos::where('titulo_id', $tituloId)->get();
        foreach($subtitulos as $subtitulo) {
            ArtefatosTitulosSubtitulos::create([
                'artefato_titulo_id' => $artefatoTituloId,
                'subtitulo_id' => $subtitulo->id,
            ]);
        }
    }

    use HasFactory;
}
