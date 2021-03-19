<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitulos extends Model
{
    protected $table = 'subtitulos';

    protected $fillable = ['nome','slug', 'ordem', 'titulo_id'];

    public function titulos()
    {
        return $this->belongsTo(Titulo::class, 'titulo_id');
    }


    use HasFactory;
}
