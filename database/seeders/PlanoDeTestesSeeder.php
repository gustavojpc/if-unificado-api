<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PlanoDeTestesSeeder extends Seeder
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
            'nome' => 'Plano de Teste',
            'slug' => 'plano_de_teste',
            'fase_id' => Fase::where('slug', 'teste')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Missão de Avaliação e Motivação de Teste',
            'slug' => 'missao_de_avaliacao_e_motivacao_de_teste',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Itens de Teste de Destino',
            'slug' => 'itens_de_teste_de_destino',
            'ordem' => 3,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Esboço de Testes Planejados',
            'slug' => 'esboco_de_testes_planejados',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Abordagem de Teste',
            'slug' => 'abordagem_de_teste',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Critérios de Entrada e Saída',
            'slug' => 'criterios_de_entrada_e_saida',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Entregáveis',
            'slug' => 'entregaveis',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Teste de Fluxo de Trabalho',
            'slug' => 'teste_de_fluxo_de_trabalho',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Necessidades Ambientais',
            'slug' => 'necessidades_ambientais',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Responsabilidade, necessidades de Pessoas e Treinamento',
            'slug' => 'responsabilidade_necessidades_de_pessoas_e_treinamento',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Marcos de Interação',
            'slug' => 'marcos_de_interacao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Riscos, Dependências, Suposições e Restrições',
            'slug' => 'riscos_dependencias_suposicoes_e_restricoes',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Processos e procedimentos de Gestão',
            'slug' => 'processos_e_procedimentos_de_gestao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_teste')->first()->id,
        ]);




        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 35,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 35,
        ]);
        Subtitulos::create([
            'nome' => 'Público Alvo',
            'slug' => 'publico_alvo',
            'ordem' => 3,
            'titulo_id' => 35,
        ]);
        Subtitulos::create([
            'nome' => 'Terminologia e Acrônimos do Documento',
            'slug' => 'terminologia_e_acronimos_do_documento',
            'ordem' => 4,
            'titulo_id' => 35,
        ]);
        Subtitulos::create([
            'nome' => 'Referencias',
            'slug' => 'referencias',
            'ordem' => 6,
            'titulo_id' => 35,
        ]);
        Subtitulos::create([
            'nome' => 'Estrutura do Documento',
            'slug' => 'estrutura_do_documento',
            'ordem' => 7,
            'titulo_id' => 35,
        ]);


        Subtitulos::create([
            'nome' => 'Antecedentes',
            'slug' => 'antecedentes',
            'ordem' => 1,
            'titulo_id' => 36,
        ]);
        Subtitulos::create([
            'nome' => 'Missão de Avaliação',
            'slug' => 'missao_de_avaliacao',
            'ordem' => 2,
            'titulo_id' => 36,
        ]);
        Subtitulos::create([
            'nome' => 'Motivadores de teste',
            'slug' => 'motivadores_de_teste',
            'ordem' => 3,
            'titulo_id' => 36,
        ]);



        Subtitulos::create([
            'nome' => 'Esboço de Inclusão de teste',
            'slug' => 'esboco_de_inclusao_de_teste',
            'ordem' => 1,
            'titulo_id' => 38,
        ]);
        Subtitulos::create([
            'nome' => 'Esboço de Outros Candidatos para inclusão potencial',
            'slug' => 'esboco_de_outros_candidatos_para_inclusao_potencial',
            'ordem' => 2,
            'titulo_id' => 38,
        ]);
        Subtitulos::create([
            'nome' => 'Esboço de exclusões de teste',
            'slug' => 'esboco_de_inclusao_de_teste',
            'ordem' => 3,
            'titulo_id' => 38,
        ]);




        Subtitulos::create([
            'nome' => 'Catálogo de ideias de teste iniciais e outras fontes de referencia',
            'slug' => 'catalogo_de_ideias_de_teste_iniciais_e_outras_fontes_de_referencia',
            'ordem' => 1,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Técnica e tipos de teste',
            'slug' => 'tecnica_e_tipos_de_teste',
            'ordem' => 2,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de integridade de dados e banco de dados',
            'slug' => 'teste_de_integridade_de_dados_e_banco_de_dados',
            'ordem' => 3,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de função',
            'slug' => 'teste_de_funcao',
            'ordem' => 4,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de ciclo de negócios',
            'slug' => 'teste_de_ciclo_de_negocios',
            'ordem' => 5,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de interface do usuário',
            'slug' => 'teste_de_interface_do_usuario',
            'ordem' => 6,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Perfil de desempenho',
            'slug' => 'perfil_de_desempenho',
            'ordem' => 7,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de carga',
            'slug' => 'teste_de_carga',
            'ordem' => 8,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de estresse',
            'slug' => 'teste_de_estresse',
            'ordem' => 9,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de volume',
            'slug' => 'teste_de_volume',
            'ordem' => 10,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de segurança e controle de acesso',
            'slug' => 'teste_de_seguranca_e_controle_de_acesso',
            'ordem' => 11,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de failover e recuperação',
            'slug' => 'teste_de_failover_e_recuperacao',
            'ordem' => 12,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de configuração',
            'slug' => 'teste_de_configuracao',
            'ordem' => 13,
            'titulo_id' => 39,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de Instalação',
            'slug' => 'teste_de_instalacao',
            'ordem' => 14,
            'titulo_id' => 39,
        ]);





        Subtitulos::create([
            'nome' => 'Plano de Teste',
            'slug' => 'plano_de_teste',
            'ordem' => 1,
            'titulo_id' => 40,
        ]);
        Subtitulos::create([
            'nome' => 'Critérios de entrada do plano de teste',
            'slug' => 'criterios_de_entrada_do_plano_de_teste',
            'ordem' => 2,
            'titulo_id' => 40,
        ]);
        Subtitulos::create([
            'nome' => 'Critérios de saída do plano de teste',
            'slug' => 'criterios_de_saida_do_plano_de_teste',
            'ordem' => 3,
            'titulo_id' => 40,
        ]);
        Subtitulos::create([
            'nome' => 'Critério de suspensão de retomada',
            'slug' => 'criterio_de_suspensao_de_retomada',
            'ordem' => 4,
            'titulo_id' => 40,
        ]);
        Subtitulos::create([
            'nome' => 'Ciclos de teste',
            'slug' => 'ciclos_de_teste',
            'ordem' => 5,
            'titulo_id' => 40,
        ]);
        Subtitulos::create([
            'nome' => 'Critérios de entrada do ciclo de teste',
            'slug' => 'criterios_de_entrada_do_ciclo_de_teste',
            'ordem' => 6,
            'titulo_id' => 40,
        ]);
        Subtitulos::create([
            'nome' => 'Critérios de saída do ciclo de teste',
            'slug' => 'criterios_de_saida_do_ciclo_de_teste',
            'ordem' => 7,
            'titulo_id' => 40,
        ]);
        Subtitulos::create([
            'nome' => 'Término anormal do ciclo de teste',
            'slug' => 'termino_anormal_do_ciclo_de_teste',
            'ordem' => 8,
            'titulo_id' => 40,
        ]);



        Subtitulos::create([
            'nome' => 'Resumo de avaliação de teste',
            'slug' => 'resumo_de_avaliacao_de_teste',
            'ordem' => 1,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Relatório de cobertura de teste',
            'slug' => 'relatorio_de_cobertura_de_teste',
            'ordem' => 2,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Relatório de qualidade percebida',
            'slug' => 'relatorio_de_qualidade_percebida',
            'ordem' => 3,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Registros de incidentes e solicitação de mudanças',
            'slug' => 'registros_de_incidentes_e_solicitacao_de_mudancas',
            'ordem' => 4,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Teste de fumaça suíte e scripts de teste de suporte ',
            'slug' => 'teste_de_fumaca_suite_e_scripts_de_teste_de_suporte',
            'ordem' => 5,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Produto de trabalhos adicionais',
            'slug' => 'produto_de_trabalhos_adicionais',
            'ordem' => 6,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Resultado de teste detalhado',
            'slug' => 'resultado_de_teste_detalhado',
            'ordem' => 7,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Scripts de teste funcional automatizado adicional',
            'slug' => 'scripts_de_teste_funcional_automatizado_adicional',
            'ordem' => 8,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Diretrizes de testes',
            'slug' => 'diretrizes_de_testes',
            'ordem' => 9,
            'titulo_id' => 41,
        ]);
        Subtitulos::create([
            'nome' => 'Matizes de rastreabilidade',
            'slug' => 'matizes_de_rastreabilidade',
            'ordem' => 10,
            'titulo_id' => 41,
        ]);



        Subtitulos::create([
            'nome' => 'Hardware básico do sistema',
            'slug' => 'hardware_basico_do_sistema',
            'ordem' => 1,
            'titulo_id' => 43,
        ]);
        Subtitulos::create([
            'nome' => 'Elementos de software de base no ambiente de teste',
            'slug' => 'elementos_de_software_de_base_no_ambiente_de_teste',
            'ordem' => 2,
            'titulo_id' => 43,
        ]);
        Subtitulos::create([
            'nome' => 'Produtividade e ferramentas de suporte',
            'slug' => 'produtividade_e_ferramentas_de_suporte',
            'ordem' => 3,
            'titulo_id' => 43,
        ]);
        Subtitulos::create([
            'nome' => 'Configurações do ambiente de teste',
            'slug' => 'configuracoes_do_ambiente_de_teste',
            'ordem' => 4,
            'titulo_id' => 43,
        ]);

        Subtitulos::create([
            'nome' => 'Pessoas e funções',
            'slug' => 'pessoas_e_funcoes',
            'ordem' => 1,
            'titulo_id' => 44,
        ]);
        Subtitulos::create([
            'nome' => 'Necessidade de pessoas e treinamento',
            'slug' => 'necessidade_de_pessoas_e_treinamento',
            'ordem' => 2,
            'titulo_id' => 44,
        ]);


        Subtitulos::create([
            'nome' => 'Medindo e avaliando a extensão do teste',
            'slug' => 'medindo_e_avaliando_a_extensao_do_teste',
            'ordem' => 1,
            'titulo_id' => 45,
        ]);
        Subtitulos::create([
            'nome' => 'Avaliando as entregas deste plano de teste',
            'slug' => 'avaliando_as_entregas_deste_plano_de_teste',
            'ordem' => 2,
            'titulo_id' => 45,
        ]);
        Subtitulos::create([
            'nome' => 'Relatório de problemas, escalonamento e resolução de problemas',
            'slug' => 'relatorio_de_problemas_escalonamento_e_resolucao_de_problemas',
            'ordem' => 3,
            'titulo_id' => 45,
        ]);
        Subtitulos::create([
            'nome' => 'Gerenciando ciclos e testes',
            'slug' => 'gerenciando_ciclos_e_testes',
            'ordem' => 4,
            'titulo_id' => 45,
        ]);
        Subtitulos::create([
            'nome' => 'Estratégias de rastreabilidade',
            'slug' => 'estrategias_de_rastreabilidade',
            'ordem' => 5,
            'titulo_id' => 45,
        ]);
        Subtitulos::create([
            'nome' => 'Aprovação e Signoff',
            'slug' => 'aprovacao_e_signoff',
            'ordem' => 6,
            'titulo_id' => 45,
        ]);



        Model::reguard();
    }
}
