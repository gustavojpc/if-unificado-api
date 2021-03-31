<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DocumentoArquiteturaNegociosSeeder extends Seeder
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
            'nome' => 'Documento de Arquitetura de Negócios',
            'slug' => 'documento_de_arquitetura_de_negocios',
            'fase_id' => Fase::where('slug', 'modelagem_de_negocios')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Representação Arquitetônica',
            'slug' => 'representacao_arquitetonica',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Objetivos e Restrições Arquitetônicas',
            'slug' => 'objetivos_restricoes_arquitetonicas',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão do Processo de Negócios',
            'slug' => 'visao_do_processo_de_negocios',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão da Estrutura da Organização',
            'slug' => 'visao_da_estrutura_da_organizacao',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão da Cultura',
            'slug' => 'visao_da_cultura',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão dos Aspectos dos Recursos Humanos',
            'slug' => 'visao_dos_aspectos_dos_recursos_humanos',
            'ordem' => 7,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visualização do Domínio',
            'slug' => 'visualizacao_do_dominio',
            'ordem' => 8,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Metas de Tamanho e Desempenho',
            'slug' => 'metas_de_tamanho_e_desempenho',
            'ordem' => 9,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Objetivos de Qualidade',
            'slug' => 'objetivos_de_qualidade',
            'ordem' => 10,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_negocios')->first()->id,
        ]);

        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 9,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 9,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 9,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 9,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 9,
        ]);

        Subtitulos::create([
            'nome' => 'Realizações de Casos de Uso de Negócios',
            'slug' => 'realizacoes_de_casos_de_uso_de_negocios',
            'ordem' => 1,
            'titulo_id' => 13,
        ]);

        Model::reguard();

    }
}
