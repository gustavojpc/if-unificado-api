<?php

namespace Database\Seeders;

use App\Models\Fase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Fase::create([
            'nome' => 'Modelagem de Negócios',
            'cor' => '#E52616',
            'slug' => 'modelagem_de_negocios',
            'ordem' => 1,
        ]);
        Fase::create([
            'nome' => 'Requisitos',
            'cor' => '#E4795C',
            'slug' => 'requisitos',
            'ordem' => 2,
        ]);
        Fase::create([
            'nome' => 'Análise e Design',
            'cor' => '#EF9E45',
            'slug' => 'analise_design',
            'ordem' => 3,
        ]);
        Fase::create([
            'nome' => 'Implementação',
            'cor' => '#FBED8C',
            'slug' => 'implementacao',
            'ordem' => 4,
        ]);
        Fase::create([
            'nome' => 'Teste',
            'cor' => '#01A17F',
            'slug' => 'teste',
            'ordem' => 5,
        ]);
        Fase::create([
            'nome' => 'Implantação',
            'cor' => '#00A4B4',
            'slug' => 'implantacao',
            'ordem' => 6,
        ]);
        Fase::create([
            'nome' => 'Gerenciamento de Configuração e Mudanças',
            'cor' => '#008081',
            'slug' => 'gerenciamento_de_configuracao',
            'ordem' => 7,
        ]);
        Fase::create([
            'nome' => 'Geranciamento de projetos',
        'cor' => '#103D5A',
        'slug' => 'gerenciamento_de_projetos',
        'ordem' => 8
        ]);
        Fase::create([
            'nome' => 'Ambiente',
            'cor' => '#E52616',
            'slug' => 'ambiente',
            'ordem' => 9,
        ]);
        Model::reguard();
    }
}
