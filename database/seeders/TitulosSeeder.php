<?php

namespace Database\Seeders;

use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class TitulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'casos_de_uso',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'casos_de_uso')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Desenvolvimento',
            'slug' => 'desenvolvimento',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'casos_de_uso')->first()->id,
        ]);

        Model::reguard();
    }
}
