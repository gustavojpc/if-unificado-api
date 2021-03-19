<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{

    protected $table = 'templates';

    protected $fillable = ['nome','slug','fase_id'];

    public function fases()
    {
        return $this->belongsTo(Fase::class, 'artefato_id');
    }

    public function artefatos()
    {
        return $this->hasMany(Artefatos::class, 'artefato_id');
    }

    use HasFactory;
}
