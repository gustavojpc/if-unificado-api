<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EspecComplementarSeeder extends Seeder
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
            'nome' => 'Especificação Complementar',
            'slug' => 'especificacao_complementar',
            'fase_id' => Fase::where('slug', 'requisitos')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Funcionalidades',
            'slug' => 'Funcionalidades',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Usabilidade',
            'slug' => 'Usabilidade',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Confiabilidade',
            'slug' => 'confiabilidade',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Desempenho',
            'slug' => 'Desempenho',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Suportabilidade',
            'slug' => 'Suportabilidade',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Restrições de design',
            'slug' => 'restricoes_de_design',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Documentação do usuário online e requisitos do sistema de ajuda',
            'slug' => 'documentacao_do_usuario_online_e_requisitos_do_sistema_de_ajuda',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Componentes adquiridos',
            'slug' => 'componentes_adquiridos',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Interfaces',
            'slug' => 'Interfaces',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Requisitos de licenciamento',
            'slug' => 'requisitos_de_licenciamento',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Avisos legais, de direitos autorais e outros',
            'slug' => 'avisos_legais_de_direitos_autorais_e_outros',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Padrões Aplicáveis',
            'slug' => 'padroes_aplicaveis',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'especificacao_complementar')->first()->id,
        ]);






        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 94,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 94,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 94,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 94,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 94,
        ]);

        Subtitulos::create([
            'nome' => 'Interfaces do usuário',
            'slug' => 'interfaces_do_usuario',
            'ordem' => 1,
            'titulo_id' => 104,
        ]);
        Subtitulos::create([
            'nome' => 'Interfaces de Hardware',
            'slug' => 'interfaces_de_hardware',
            'ordem' => 2,
            'titulo_id' => 104,
        ]);
        Subtitulos::create([
            'nome' => 'Interfaces de software',
            'slug' => 'interfaces_de_software',
            'ordem' => 3,
            'titulo_id' => 104,
        ]);
        Subtitulos::create([
            'nome' => 'Interfaces de comunicação',
            'slug' => 'interfaces_de_comunicacao',
            'ordem' => 4,
            'titulo_id' => 104,
        ]);



        Model::reguard();
    }
}
