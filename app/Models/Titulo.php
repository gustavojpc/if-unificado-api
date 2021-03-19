<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table = 'titulos';

    protected $fillable = ['nome','slug', 'ordem', 'template_id'];

    public function templates()
    {
        return $this->belongsTo(Templates::class, 'template_id');
    }

    public function subtitulos()
    {
        return $this->hasMany(Subtitulos::class, 'titulo_id');
    }
    use HasFactory;
}
