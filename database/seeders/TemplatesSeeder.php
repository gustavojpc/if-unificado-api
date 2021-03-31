<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Templates;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class TemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Templates::create([
            'nome' => 'Avaliação da Organização Alvo',
            'slug' => 'avaliacao_da_organizacao_alvo',
            'fase_id' => Fase::where('slug', 'modelagem_de_negocios')->first()->id,
        ]);


        Model::reguard();
    }
}
