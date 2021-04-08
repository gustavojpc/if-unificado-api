<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CasosDeUsosSeeder extends Seeder
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
            'nome' => 'Nome no Caso de Uso do Negócio',
            'slug' => 'nome_no_caso_de_uso_do_negocio',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Metas',
            'slug' => 'metas',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Metas de Desempenho',
            'slug' => 'metas_de_desempenho',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Fluxo de Trabalho',
            'slug' => 'fluxo_de_trabalho',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Categoria',
            'slug' => 'categoria',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Risco',
            'slug' => 'risco',
            'ordem' => 7,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Possibilidades',
            'slug' => 'possibilidades',
            'ordem' => 8,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Proprietário do processo',
            'slug' => 'proprietario_do_processo',
            'ordem' => 9,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Requisitos Especiais',
            'slug' => 'requisitos_especiais',
            'ordem' => 10,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Pontos de Extenção',
            'slug' => 'pontos_de_extencao',
            'ordem' => 11,
            'template_id' => Templates::where('slug', 'caso_de_uso_de_negocio')->first()->id,
        ]);


        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 54,
        ]);


        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 54,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 54,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 54,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 54,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 54,
        ]);

        Subtitulos::create([
            'nome' => 'Breve Descrição',
            'slug' => 'breve_descricao',
            'ordem' => 1,
            'titulo_id' => 55,
        ]);

        Subtitulos::create([
            'nome' => 'Nome da Meta de Desempenho',
            'slug' => 'nome_da_meta_de_desempenho',
            'ordem' => 1,
            'titulo_id' => 57,
        ]);


        Subtitulos::create([
            'nome' => 'Fluxo de Trabalho básico',
            'slug' => 'fluxo_de_trabalho_basico',
            'ordem' => 1,
            'titulo_id' => 58,
        ]);
        Subtitulos::create([
            'nome' => 'Nome da Etapa do Fluxo de Trabalho',
            'slug' => 'nome_da_etapa_do_fluxo_de_trabalho',
            'ordem' => 2,
            'titulo_id' => 58,
        ]);
        Subtitulos::create([
            'nome' => 'Fluxo de Trabalho Alternativo',
            'slug' => 'fluxo_de_trabalho_alternativo',
            'ordem' => 3,
            'titulo_id' => 58,
        ]);


        Subtitulos::create([
            'nome' => 'Nome do Requisito especial',
            'slug' => 'nome_do_requisito_especial',
            'ordem' => 1,
            'titulo_id' => 63,
        ]);

        Subtitulos::create([
            'nome' => 'Nome do Ponto de Extenção',
            'slug' => 'nome_do_ponto_de_extencao',
            'ordem' => 2,
            'titulo_id' => 64,
        ]);




        Model::reguard();
    }
}
