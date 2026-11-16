<?php

return [
    'resource' => [
        'label' => 'Operação de tratamento',
        'plural_label' => 'Operações de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'legal_basis' => 'Base legal',
        'data_subjects' => 'Titulares',
        'data_categories' => 'Outras categorias de dados',
        'models' => 'Modelos',
        'recipients' => 'Destinatários',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'country' => 'País (código ISO)',
        'international_transfers' => 'Transferências internacionais',
        'international' => 'Internacional',
        'mechanism' => 'Mecanismo legal (art. 33)',
        'retention' => 'Retenção',
        'security_measures' => 'Medidas de segurança',
    ],

    'placeholders' => [
        'data_subjects' => 'clientes, funcionários...',
    ],

    'help' => [
        'data_categories' => 'Dados não declarados em um modelo com #[PersonalData].',
        'models' => 'Os dados pessoais declarados nesses modelos entram no registro.',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 7º, I)',
        'legal_obligation' => 'Obrigação legal (art. 7º, II)',
        'public_policy' => 'Políticas públicas (art. 7º, III)',
        'research' => 'Estudos por órgão de pesquisa (art. 7º, IV)',
        'contract' => 'Execução de contrato (art. 7º, V)',
        'exercise_of_rights' => 'Exercício regular de direitos (art. 7º, VI)',
        'life_protection' => 'Proteção da vida (art. 7º, VII)',
        'health_protection' => 'Tutela da saúde (art. 7º, VIII)',
        'legitimate_interest' => 'Legítimo interesse (art. 7º, IX)',
        'credit_protection' => 'Proteção do crédito (art. 7º, X)',
        'fraud_prevention' => 'Prevenção à fraude (art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Operador',
        'controller' => 'Controlador (conjunto)',
        'public_authority' => 'Poder público',
    ],

    'mechanisms' => [
        'adequacy' => 'País com nível adequado (art. 33, I)',
        'standard_clauses' => 'Cláusulas-padrão contratuais (art. 33, II, b)',
        'specific_clauses' => 'Cláusulas contratuais específicas (art. 33, II, a)',
        'binding_corporate_rules' => 'Normas corporativas globais (art. 33, II, c)',
        'specific_consent' => 'Consentimento específico (art. 33, VIII)',
        'other' => 'Outro (art. 33)',
    ],

    'actions' => [
        'export' => 'Exportar registro (JSON)',
    ],
];
