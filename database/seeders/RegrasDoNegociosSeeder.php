<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RegrasDoNegociosSeeder extends Seeder
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
            'nome' => 'Regras do Negócio',
            'slug' => 'regras_do_negocio',
            'fase_id' => Fase::where('slug', 'modelagem_de_negocios')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Definições',
            'slug' => 'definicoes',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);



        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 22,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 22,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 22,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 22,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 22,
        ]);


        Model::reguard();
    }
}
