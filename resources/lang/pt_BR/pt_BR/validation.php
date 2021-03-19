<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute deve ser aceito.',
    'active_url'           => ':attribute não é uma URL válida.',
    'after'                => ':attribute deve ser uma data depois de :date.',
    'alpha'                => ':attribute deve conter somente letras.',
    'alpha_dash'           => ':attribute deve conter letras, números e traços.',
    'alpha_num'            => ':attribute deve conter somente letras e números.',
    'array'                => ':attribute deve ser um array.',
    'before'               => ':attribute deve ser uma data antes de :date.',
    'between'              => [
        'numeric' => ':attribute deve estar entre :min e :max.',
        'file'    => ':attribute deve estar entre :min e :max kilobytes.',
        'string'  => ':attribute deve estar entre :min e :max caracteres.',
        'array'   => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => ':attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de :attribute não confere.',
    'date'                 => ':attribute não é uma data válida.',
    'date_format'          => ':attribute não confere com o formato :format.',
    'different'            => ':attribute e :other devem ser diferentes.',
    'digits'               => ':attribute deve ter :digits dígitos.',
    'digits_between'       => ':attribute deve ter entre :min e :max dígitos.',
    'email'                => ':attribute deve ser um endereço de e-mail válido.',
    'filled'               => ':attribute é um campo obrigatório.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'image'                => ':attribute deve ser uma imagem.',
    'in'                   => ':attribute é inválido.',
    'integer'              => ':attribute deve ser um inteiro.',
    'ip'                   => ':attribute deve ser um endereço IP válido.',
    'max'                  => [
        'numeric' => ':attribute não deve ser maior que :max.',
        'file'    => ':attribute não deve ter mais que :max kilobytes.',
        'string'  => ':attribute não deve ter mais que :max caracteres.',
        'array'   => ':attribute não pode ter mais que :max itens.',
    ],
    'mimes'                => ':attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute deve ser no mínimo :min.',
        'file'    => ':attribute deve ter no mínimo :min kilobytes.',
        'string'  => ':attribute deve ter no mínimo :min caracteres.',
        'array'   => ':attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => ':attribute deve ser um número.',
    'regex'                => 'O formato de :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum destes estão presentes: :values.',
    'same'                 => ':attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => ':attribute deve ser :size.',
        'file'    => ':attribute deve ter :size kilobytes.',
        'string'  => ':attribute deve ter :size caracteres.',
        'array'   => ':attribute deve conter :size itens.',
    ],
    'timezone'             => ':attribute deve ser uma timezone válida.',
    'unique'               => ':attribute já está em uso.',
    'url'                  => 'O formato de :attribute é inválido.',
    'table_not_found' => 'A tabela informada não está cadastrada em nossa base.',
    'id' => 'O campo :attribute é obrigatório',
    'product_status_slug' => 'O campo :attribute é obrigatório',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'id' => 'id',
        'password' => 'Senha',
        'email' => 'Email',
        'name' => 'Nome',
        'title' => 'Título',
        'description' => 'Descrição',
        'priority' => 'Prioridade',
        'scheduled_to' => 'Agendado para',
        'cost' => 'Custo',
        'done' => 'Feito',
        'project_id' => 'Projeto',
        'created_at' => 'Criado em',
        'updated_at' => 'Atualizado em',
        'roles' => 'Perfis',
        'users' => 'Para',
        'subject' => 'Assunto',
        'message' => 'Mensagem',
        'date' => 'Data',
        'image' => 'Imagem',
        'client_id' => 'Cliente',
        'start_date' => 'Data de Início',
        'end_date' => 'Data do Fim',
        'cycle_id' => 'Ciclo',
        'priority_id' => 'Prioridade',
        'responsible_name' => 'Nome do Responsável',
        'responsible_email' => 'Email do Responsável',
        'responsible_tel' => 'Telefone do Responsável',
        'qt_hours_cycle' => 'Quantidade Horas do Ciclo',
        'cnpj' => 'CNPJ',
        'cpf' => 'CPF',
        'roles.id' => 'Perfil de Usuário',
        'link' => 'Link ou @ do perfil é obrigatório',
        'categories' => 'Ao menos um tipo de perfil deve ser selecionado',
        'social_network_type_id' => 'A rede social é obrigatória',
        'date_birth' => 'Data de Nascimento',
        'city_id' => 'Cidade',
        'genre_id' => 'Gênero',
        'user_name' => 'Nome de Usuário',
        'company_about' => 'Sobre sua empresa',
        'approved_deadline' => 'Data limite para aprovação',
        'deadline' => 'Data limite para publicação',
        'has_product_delivery' => 'Entrega de produto'
    ],

];
