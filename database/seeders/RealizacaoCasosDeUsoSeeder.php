<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RealizacaoCasosDeUsoSeeder extends Seeder
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
            'nome' => 'Caso de uso de Negócio',
            'slug' => 'caso_de_uso_de_negocio',
            'fase_id' => Fase::where('slug', 'modelagem_de_negocios')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Realização de Fluxo de Trabalho',
            'slug' => 'realizacao_de_fluxo_de_trabalho',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Requisitos derivados',
            'slug' => 'requisitos_derivados',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);



        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 65,
        ]);


        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 65,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 65,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 65,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 65,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 65,
        ]);


        Model::reguard();
    }
}
