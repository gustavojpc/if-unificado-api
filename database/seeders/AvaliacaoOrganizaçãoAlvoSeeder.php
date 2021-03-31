<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AvaliacaoOrganizaçãoAlvoSeeder extends Seeder
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


        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Contexto Empresarial',
            'slug' => 'contexto_empresarial',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Ideias e estratégias de negócios no contexto do projeto',
            'slug' => 'ideias_estrategias',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Fatores externos',
            'slug' => 'fatores_externos',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Fatores internos',
            'slug' => 'fatores_internos',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Resultados de Benchmarking',
            'slug' => 'benchmarking',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Desempenho da Organização Alvo',
            'slug' => 'desempenho_organizacao_alvo',
            'ordem' => 7,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Conclusão da Avaliação',
            'slug' => 'conclusao_avaliacao',
            'ordem' => 8,
            'template_id' => Templates::where('slug', 'avaliacao_da_organizacao_alvo')->first()->id,
        ]);


        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 1,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 1,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 1,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 1,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 1,
        ]);



        // *---------------------------------------------------------*


        Subtitulos::create([
            'nome' => 'Clientes',
            'slug' => 'clientes',
            'ordem' => 1,
            'titulo_id' => 4,
        ]);
        Subtitulos::create([
            'nome' => 'Concorrentes',
            'slug' => 'concorrentes',
            'ordem' => 2,
            'titulo_id' => 4,
        ]);
        Subtitulos::create([
            'nome' => 'Outras partes interessadas',
            'slug' => 'outras_partes',
            'ordem' => 3,
            'titulo_id' => 4,
        ]);


        // *---------------------------------------------------------*


        Subtitulos::create([
            'nome' => 'Processos de Negócios',
            'slug' => 'processo_negocios',
            'ordem' => 1,
            'titulo_id' => 5,
        ]);
        Subtitulos::create([
            'nome' => 'Ferramentas de Suporte',
            'slug' => 'ferramentas_de_suporte',
            'ordem' => 2,
            'titulo_id' => 5,
        ]);
        Subtitulos::create([
            'nome' => 'Organização Interna',
            'slug' => 'organizacao_interna',
            'ordem' => 3,
            'titulo_id' => 5,
        ]);
        Subtitulos::create([
            'nome' => 'Competências, habilidades e atitudes',
            'slug' => 'competencia_habilidades_atitudes',
            'ordem' => 4,
            'titulo_id' => 5,
        ]);
        Subtitulos::create([
            'nome' => 'Capacidade de mudança',
            'slug' => 'capacidade_de_mudanca',
            'ordem' => 5,
            'titulo_id' => 5,
        ]);


        // *---------------------------------------------------------*


        Subtitulos::create([
            'nome' => 'Áreas de Problemas',
            'slug' => 'area_de_problemas',
            'ordem' => 1,
            'titulo_id' => 8,
        ]);
        Subtitulos::create([
            'nome' => 'Novas Tecnologias Aplicáveis',
            'slug' => 'novas_tecnologias_aplicaveis',
            'ordem' => 2,
            'titulo_id' => 8,
        ]);

    }
}
