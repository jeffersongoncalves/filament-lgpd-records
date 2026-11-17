<?php

return [
    'resource' => [
        'label' => 'Atividade de tratamento',
        'plural_label' => 'Atividades de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'legal_basis' => 'Fundamento legal',
        'data_subjects' => 'Titulares',
        'data_categories' => 'Outras categorias de dados',
        'models' => 'Modelos',
        'recipients' => 'Destinatários',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'country' => 'País (código ISO)',
        'international_transfers' => 'Transferências internacionais',
        'international' => 'Internacional',
        'mechanism' => 'Mecanismo legal (art. 33.º)',
        'retention' => 'Retenção',
        'security_measures' => 'Medidas de segurança',
    ],

    'placeholders' => [
        'data_subjects' => 'clientes, colaboradores...',
    ],

    'help' => [
        'data_categories' => 'Dados não declarados num modelo com #[PersonalData].',
        'models' => 'Os dados pessoais declarados nestes modelos entram no registo.',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 7.º, I)',
        'legal_obligation' => 'Obrigação legal (art. 7.º, II)',
        'public_policy' => 'Políticas públicas (art. 7.º, III)',
        'research' => 'Investigação (art. 7.º, IV)',
        'contract' => 'Execução de contrato (art. 7.º, V)',
        'exercise_of_rights' => 'Exercício de direitos (art. 7.º, VI)',
        'life_protection' => 'Proteção da vida (art. 7.º, VII)',
        'health_protection' => 'Tutela da saúde (art. 7.º, VIII)',
        'legitimate_interest' => 'Interesse legítimo (art. 7.º, IX)',
        'credit_protection' => 'Proteção do crédito (art. 7.º, X)',
        'fraud_prevention' => 'Prevenção da fraude (art. 11.º, II, g)',
    ],

    'roles' => [
        'processor' => 'Subcontratante',
        'controller' => 'Responsável (conjunto)',
        'public_authority' => 'Autoridade pública',
    ],

    'mechanisms' => [
        'adequacy' => 'País com nível adequado (art. 33.º, I)',
        'standard_clauses' => 'Cláusulas-tipo contratuais (art. 33.º, II, b)',
        'specific_clauses' => 'Cláusulas contratuais específicas (art. 33.º, II, a)',
        'binding_corporate_rules' => 'Regras vinculativas aplicáveis às empresas (art. 33.º, II, c)',
        'specific_consent' => 'Consentimento específico (art. 33.º, VIII)',
        'other' => 'Outro (art. 33.º)',
    ],

    'actions' => [
        'export' => 'Exportar registo (JSON)',
    ],
];
