<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class VisaoSeeder extends Seeder
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
            'nome' => 'Visão',
            'slug' => 'visao',
            'fase_id' => Fase::where('slug', 'requisitos')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'visao')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Posicionamento',
            'slug' => 'posicionamento',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'visao')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Descrições das partes interessadas e do usuário',
            'slug' => 'descricoes_das_partes_interessadas_e_do_usuario',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'visao')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Visão geral do produto',
            'slug' => 'visao_geral_do_produto',
            'ordem' => 4,
            'template_id' => Templates::where('slug', 'visao')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Características do produto ',
            'slug' => 'caracteristicas_do_produto',
            'ordem' => 5,
            'template_id' => Templates::where('slug', 'visao')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Outros requisitos do produto ',
            'slug' => 'outros_requisitos_do_produto',
            'ordem' => 6,
            'template_id' => Templates::where('slug', 'visao')->first()->id,
        ]);



        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 1,
            'titulo_id' => 71,
        ]);

        Subtitulos::create([
            'nome' => 'Declaração de problema',
            'slug' => 'declaracao_de_problema',
            'ordem' => 1,
            'titulo_id' => 72,
        ]);
        Subtitulos::create([
            'nome' => 'Declaração de problema',
            'slug' => 'declaracao_de_posicao_do_produto',
            'ordem' => 2,
            'titulo_id' => 72,
        ]);


        Subtitulos::create([
            'nome' => 'Resumo do tomador',
            'slug' => 'resumo_do_tomador',
            'ordem' => 1,
            'titulo_id' => 73,
        ]);
        Subtitulos::create([
            'nome' => 'Resumo do usuário',
            'slug' => 'resumo_do_usuario',
            'ordem' => 2,
            'titulo_id' => 73,
        ]);
        Subtitulos::create([
            'nome' => 'Ambiente do Usuário',
            'slug' => 'ambiente_do_usuario',
            'ordem' => 3,
            'titulo_id' => 73,
        ]);
        Subtitulos::create([
            'nome' => 'Principais Partes Interessadas ou Necessidades do Usuário',
            'slug' => 'principais_partes_interessadas_ou_necessidades_do_usuario',
            'ordem' => 4,
            'titulo_id' => 73,
        ]);
        Subtitulos::create([
            'nome' => 'Alternativas e competição',
            'slug' => 'alternativas_e_competicao',
            'ordem' => 5,
            'titulo_id' => 73,
        ]);


        Subtitulos::create([
            'nome' => 'Perspectiva do produto',
            'slug' => 'perspectiva_do_produto',
            'ordem' => 1,
            'titulo_id' => 74,
        ]);
        Subtitulos::create([
            'nome' => 'Suposições e Dependências',
            'slug' => 'suposicoes_e_dependencias',
            'ordem' => 2,
            'titulo_id' => 74,
        ]);




        Model::reguard();
    }
}
