<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ArquiteturaSoftwareSeeder extends Seeder
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
            'nome' => 'Documento de Arquitetura de Software',
            'slug' => 'documento_de_arquitetura_de_software',
            'fase_id' => Fase::where('slug', 'analise_design')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Representação da Arquitetura',
            'slug' => 'representacao_da_arquitetura',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Objetivos e restrições arquitetônicas ',
            'slug' => 'objetivos_e_restricoes_arquitetonicas',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão de Caso de Uso ',
            'slug' => 'visao_de_caso_de_uso',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão Lógica',
            'slug' => 'visao_logica',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão do Processo',
            'slug' => 'visao_do_processo',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão da implementação',
            'slug' => 'visao_da_implementacao',
            'ordem' => 7,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Visualização de dados (opcional)',
            'slug' => 'visualizacao_de_dados',
            'ordem' => 8,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Qualidade',
            'slug' => 'qualidade',
            'ordem' => 9,
            'template_id' => Templates::where('slug', 'documento_de_arquitetura_de_software')->first()->id,
        ]);







        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 111,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 111,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 111,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 111,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 111,
        ]);


        Subtitulos::create([
            'nome' => 'Realizações de casos de uso ',
            'slug' => 'realizacoes_de_casos_de_uso',
            'ordem' => 1,
            'titulo_id' => 114,
        ]);


        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 115,
        ]);


        Subtitulos::create([
            'nome' => 'Pacotes de projeto com significado arquitetônico',
            'slug' => 'pacotes_de_projeto_com_significado_arquitetonico',
            'ordem' => 1,
            'titulo_id' => 115,
        ]);


        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 118,
        ]);


        Subtitulos::create([
            'nome' => 'Camadas',
            'slug' => 'camadas',
            'ordem' => 1,
            'titulo_id' => 118,
        ]);





        Model::reguard();
    }
}
