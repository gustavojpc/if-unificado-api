<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class TreinamentoRecursosSeeder extends Seeder
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
            'nome' => 'Especificação de realização de caso de uso',
            'slug' => 'especificacao_de_realizacao_de_caso_de_uso',
            'fase_id' => Fase::where('slug', 'analise_design')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Fluxo de Eventos - Design',
            'slug' => 'fluxo_de_eventos_design',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Requisitos derivados',
            'slug' => 'requisitos_derivados',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);



        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 119,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 119,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 119,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 119,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 119,
        ]);








        Model::reguard();
    }
}
