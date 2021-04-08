<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RequisitosDeSoftwareSeeder extends Seeder
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
            'nome' => 'Especificação de Requisitos de Software',
            'slug' => 'especificacao_de_requisitos_de_software',
            'fase_id' => Fase::where('slug', 'requisitos')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Descrição geral',
            'slug' => 'descricao_geral',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Requisitos específicos',
            'slug' => 'requisitos_especificos',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'informacao_de_apoio',
            'slug' => 'informacao_de_apoio',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);


        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 106,
        ]);
        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 106,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 106,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 106,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 106,
        ]);


        Subtitulos::create([
            'nome' => 'Pesquisa de Modelo de Caso de Uso',
            'slug' => 'pesquisa_de_modelo_de_caso_de_uso',
            'ordem' => 1,
            'titulo_id' => 107,
        ]);
        Subtitulos::create([
            'nome' => 'Suposições e Dependências',
            'slug' => 'suposicoes_e_dependencias',
            'ordem' => 2,
            'titulo_id' => 107,
        ]);

        Subtitulos::create([
            'nome' => 'Relatórios de casos de uso',
            'slug' => 'relatorios_de_casos_de_uso',
            'ordem' => 1,
            'titulo_id' => 108,
        ]);

        Subtitulos::create([
            'nome' => 'Requisitos Suplementares',
            'slug' => 'requisitos_suplementares',
            'ordem' => 2,
            'titulo_id' => 108,
        ]);





        Model::reguard();
    }
}
