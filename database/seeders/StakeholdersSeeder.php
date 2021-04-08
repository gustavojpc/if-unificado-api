<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class StakeholdersSeeder extends Seeder
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
            'nome' => 'Solicitações de partes interessadas ',
            'slug' => 'solicitacoes_de_partes_interessadas',
            'fase_id' => Fase::where('slug', 'requisitos')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Estabeleça a Parte Interessada ou o Perfil do Usuário',
            'slug' => 'estabeleca_a_parte_interessada_ou_o_perfil_do_usuario',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Avaliação do problema',
            'slug' => 'avaliacao_do_problema',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Compreendendo o ambiente do usuário',
            'slug' => 'compreendendo_o_ambiente_do_usuario',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Recapitulação para compreensão',
            'slug' => 'recapitulacao_para_compreensao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Entradas do analista sobre o problema da parte interessada',
            'slug' => 'entradas_do_analista_sobre_o_problema_da_parte_interessada',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Avaliação da sua solução',
            'slug' => 'avaliacao_da_sua_solucao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Avaliando a oportunidade',
            'slug' => 'avaliando_a_oportunidade',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Avaliação de confiabilidade, desempenho e necessidade de suporte',
            'slug' => 'avaliacao_de_confiabilidade_desempenho_e_necessidade_de_suporte',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Conclusão',
            'slug' => 'conclusao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Resumo do analista',
            'slug' => 'resumo_do_analista',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);


        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 76,
        ]);
        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 76,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 76,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 76,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 76,
        ]);

        Model::reguard();
    }
}
