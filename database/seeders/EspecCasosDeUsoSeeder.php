<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EspecCasosDeUsoSeeder extends Seeder
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
            'nome' => 'Especificação dos casos de uso',
            'slug' => 'especificacao_dos_casos_de_uso',
            'fase_id' => Fase::where('slug', 'requisitos')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Nome do caso de uso',
            'slug' => 'nome_do_caso_de_uso',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Fluxo de eventos',
            'slug' => 'fluxo_de_eventos',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Requisitos especiais',
            'slug' => 'requisitos_especiais',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Condições prévias',
            'slug' => 'requisitos_especiais',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Pós-condições',
            'slug' => 'pos_condicoes',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Pontos de Extensão',
            'slug' => 'pontos_de_extensao',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'solicitacoes_de_partes_interessadas')->first()->id,
        ]);

        Subtitulos::create([
            'nome' => 'Breve Descrição',
            'slug' => 'breve_descricao',
            'ordem' => 1,
            'titulo_id' => 88,
        ]);
        Subtitulos::create([
            'nome' => 'Fluxo Básico',
            'slug' => 'fluxo_basico',
            'ordem' => 1,
            'titulo_id' => 89,
        ]);
        Subtitulos::create([
            'nome' => 'Fluxos Alternativos',
            'slug' => 'fluxos_alternativos',
            'ordem' => 2,
            'titulo_id' => 89,
        ]);



        Model::reguard();
    }
}
