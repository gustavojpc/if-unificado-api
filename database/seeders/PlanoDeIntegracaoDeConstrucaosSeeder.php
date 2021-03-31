<?php

namespace Database\Seeders;

use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Seeder;

class PlanoDeIntegracaoDeConstrucaosSeeder extends Seeder
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
            'nome' => 'Visão de Negócios',
            'slug' => 'visao_de_negocios',
            'fase_id' => Fase::where('slug', 'modelagem_de_negocios')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'visao_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Posicionamento',
            'slug' => 'posicionamento',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Descrições das Partes Interessadas do Cliente',
            'slug' => 'descricoes_das_partes_interessadas_do_cliente',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Objetivos de Modelagem de Negócios',
            'slug' => 'objetivos_de_modelagem_de_negocios',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Restrições',
            'slug' => 'restrições',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Intervalo de Qualidade',
            'slug' => 'intervalo_de_qualidade',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Pendencia e Prioridade',
            'slug' => 'pendencia_e_prioridade',
            'ordem' => 7,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Outros Requerimentos',
            'slug' => 'outros_requerimentos',
            'ordem' => 8,
            'template_id' => Templates::where('slug', 'regras_do_negocio')->first()->id,
        ]);



        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 24,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 24,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 24,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 24,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 24,
        ]);

        Subtitulos::create([
            'nome' => 'Oportunidade de Negócios',
            'slug' => 'oportunidade_de_negocios',
            'ordem' => 1,
            'titulo_id' => 25,
        ]);
        Subtitulos::create([
            'nome' => 'Declaração do Problema',
            'slug' => 'declaracao_do_problema',
            'ordem' => 2,
            'titulo_id' => 25,
        ]);
        Subtitulos::create([
            'nome' => 'Declaração de posição do Produto',
            'slug' => 'declaracao_de_posicao_do_produto',
            'ordem' => 3,
            'titulo_id' => 25,
        ]);


        Subtitulos::create([
            'nome' => 'Demografia de Mercado',
            'slug' => 'demografia_de_mercado',
            'ordem' => 1,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Resumo das Partes Interessadas',
            'slug' => 'resumo_das_partes_interessadas',
            'ordem' => 2,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Resumo do Cliente',
            'slug' => 'resumo_do_cliente',
            'ordem' => 3,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Ambiente do Cliente',
            'slug' => 'ambiente_do_cliente',
            'ordem' => 4,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Perfis de Partes Interessadas',
            'slug' => 'perfis_de_partes_interessadas',
            'ordem' => 5,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Nome da Parte Interessada',
            'slug' => 'nome_da_parte_interessada',
            'ordem' => 6,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Perfis de Clientes',
            'slug' => 'perfis_de_clientes',
            'ordem' => 7,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Nome do Cliente',
            'slug' => 'nome_do_cliente',
            'ordem' => 8,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Principais Partes Interessadas ou Necessidade do Cliente',
            'slug' => 'principais_partes_interessadas_ou_necessidade_do_cliente',
            'ordem' => 9,
            'titulo_id' => 26,
        ]);
        Subtitulos::create([
            'nome' => 'Alternativas e Competição',
            'slug' => 'alternativas_e_competicao',
            'ordem' => 10,
            'titulo_id' => 26,
        ]);


        Subtitulos::create([
            'nome' => 'Padrões Aplicáveis',
            'slug' => 'alternativas_e_competicao',
            'ordem' => 1,
            'titulo_id' => 31,
        ]);
        Subtitulos::create([
            'nome' => 'Requisitos do Sistema',
            'slug' => 'requisitos_do_sistema',
            'ordem' => 2,
            'titulo_id' => 31,
        ]);
        Subtitulos::create([
            'nome' => 'Requisitos de Desempenho',
            'slug' => 'requisitos_de_desempenho',
            'ordem' => 3,
            'titulo_id' => 31,
        ]);
        Subtitulos::create([
            'nome' => 'Requisitos Ambientais',
            'slug' => 'requisitos_ambientais',
            'ordem' => 4,
            'titulo_id' => 31,
        ]);


        Model::reguard();
    }
}
