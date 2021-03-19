<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtefatosTitulosSubtitulos extends Model
{
    protected $table = 'artefatos_titulos_subtitulos';

    protected $fillable = ['descricao','subtitulo_id', 'artefato_titulo_id'];

    protected $with = ['subtitulo'];

    public function subtitulo()
    {
        return $this->belongsTo(Subtitulos::class, 'subtitulo_id');
    }
    public function artefatotitulo()
    {
        return $this->belongsTo(ArtefatosTitulos::class, 'artefato_titulo_id');
    }

    use HasFactory;
}
