<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtefatosTitulos extends Model
{
    protected $table = 'artefatos_titulos';

    protected $fillable = ['descricao','titulo_id', 'artefato_id'];

    protected $with = ['titulo'];

    public function titulo()
    {
        return $this->belongsTo(Titulo::class, 'titulo_id');
    }
    public function artefato()
    {
        return $this->belongsTo(Artefatos::class, 'artefato_id');
    }
    public function artefatosTitulosSubtitulos()
    {
        return $this->hasMany(ArtefatosTitulosSubtitulos::class, 'artefato_titulo_id');
    }

    use HasFactory;
}
