<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class GerenciamentoDeRequisitosSeeder extends Seeder
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
            'nome' => 'Plano de Gerenciamento de Requisitos',
            'slug' => 'plano_de_gerenciamento_de_requisitos',
            'fase_id' => Fase::where('slug', 'requisitos')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Gerenciamento de Requisitos',
            'slug' => 'gerenciamento_de_requisitos',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Programa de Gerenciamenton de Requisitos',
            'slug' => 'programa_de_gerenciamenton_de_requisitos',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Marcos',
            'slug' => 'marcos',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Treinamento e Recursos',
            'slug' => 'treinamento_e_recursos',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);




        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 93,
        ]);
        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 93,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 93,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 93,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 93,
        ]);

        Subtitulos::create([
            'nome' => 'Organização, responsabilidades e interfaces',
            'slug' => 'organizacao_responsabilidades_e_interfaces',
            'ordem' => 1,
            'titulo_id' => 94,
        ]);
        Subtitulos::create([
            'nome' => 'Ferramentas, ambiente e infraestrutura',
            'slug' => 'ferramentas_ambiente_e_infraestrutura',
            'ordem' => 2,
            'titulo_id' => 94,
        ]);


        Subtitulos::create([
            'nome' => 'Identificação de Requisitos',
            'slug' => 'identificacao_de_requisitos',
            'ordem' => 1,
            'titulo_id' => 95,
        ]);
        Subtitulos::create([
            'nome' => 'Rastreabilidade',
            'slug' => 'rastreabilidade',
            'ordem' => 2,
            'titulo_id' => 95,
        ]);
        Subtitulos::create([
            'nome' => 'Atributos',
            'slug' => 'atributos',
            'ordem' => 3,
            'titulo_id' => 95,
        ]);
        Subtitulos::create([
            'nome' => 'Relatórios e Medidas',
            'slug' => 'relatorios_e_medidas',
            'ordem' => 4,
            'titulo_id' => 95,
        ]);
        Subtitulos::create([
            'nome' => 'Gerenciamento de Mudanças de Requisitos',
            'slug' => 'gerenciamento_de_mudancas_de_requisitos',
            'ordem' => 5,
            'titulo_id' => 95,
        ]);
        Subtitulos::create([
            'nome' => 'Fluxos de trabalho e atividades',
            'slug' => 'fluxos_de_trabalho_e_atividades',
            'ordem' => 6,
            'titulo_id' => 95,
        ]);

        Model::reguard();
    }
}
