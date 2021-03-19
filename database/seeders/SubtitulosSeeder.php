<?php

namespace Database\Seeders;

use App\Models\Subtitulos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SubtitulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Subtitulos::create([
            'nome' => 'subtitulo introdução',
            'slug' => 'subtitulo',
            'ordem' => 1,
            'titulo_id' => 1,
        ]);
        Subtitulos::create([
            'nome' => 'Fala algo ai',
            'slug' => 'algo',
            'ordem' => 2,
            'titulo_id' => 1,
        ]);

        Model::reguard();
    }
}
