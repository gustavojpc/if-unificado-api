<?php

namespace Database\Seeders;

use App\Models\Templates;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            FasesSeeder::class,
            // TemplatesSeeder::class,
            // TitulosSeeder::class,
            // SubtitulosSeeder::class,
            AvaliacaoOrganizaçãoAlvoSeeder::class,
            DocumentoArquiteturaNegociosSeeder::class,
            GlossarioNegociosSeeder::class,
            RegrasDoNegociosSeeder::class,
            VisaoDeNegociosSeeder::class,
            PlanoDeIntegracaoDeConstrucaosSeeder::class,
            PlanoDeTestesSeeder::class,
            ResumoDeAvaliacaoSeeder::class,
            CasosDeUsosSeeder::class,
            RealizacaoCasosDeUsoSeeder::class,
            GlossariooSeeder::class,
            VisaoSeeder::class,
            StakeholdersSeeder::class,
            EspecCasosDeUsoSeeder::class,
            EspecComplementarSeeder::class,
            RequisitosDeSoftwareSeeder::class,
            ArquiteturaSoftwareSeeder::class,
            TreinamentoRecursosSeeder::class,
        ]);

    }
}
