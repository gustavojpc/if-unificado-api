<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ResumoDeAvaliacaoSeeder extends Seeder
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
            'nome' => 'Resumo da Avaliação do Teste',
            'slug' => 'resumo_da_avaliacao_do_teste',
            'fase_id' => Fase::where('slug', 'teste')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'resumo_da_avaliacao_do_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Cobertura de teste Com base No Requisito',
            'slug' => 'cobertura_de_teste_com_base_no_requisito',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'resumo_da_avaliacao_do_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Riscos, Dependências, Suposições e Restrições',
            'slug' => 'riscos_dependencias_suposicoes_e_restricoes',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'resumo_da_avaliacao_do_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Cobertura Baseada Em Código',
            'slug' => 'cobertura_baseada_em_codigo',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'resumo_da_avaliacao_do_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Ações Sugeridas',
            'slug' => 'acoes_sugeridas',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'resumo_da_avaliacao_do_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Diagramas',
            'slug' => 'diagramas',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'resumo_da_avaliacao_do_teste')->first()->id,
        ]);




        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 48,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 48,
        ]);
        Subtitulos::create([
            'nome' => 'Público Alvo',
            'slug' => 'publico_alvo',
            'ordem' => 3,
            'titulo_id' => 48,
        ]);
        Subtitulos::create([
            'nome' => 'Referencias',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 48,
        ]);
        Subtitulos::create([
            'nome' => 'Visão geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 48,
        ]);






        Model::reguard();
    }
}
