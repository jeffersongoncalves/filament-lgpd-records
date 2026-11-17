<?php

return [
    'resource' => [
        'label' => 'Actividad de tratamiento',
        'plural_label' => 'Actividades de tratamiento',
    ],

    'fields' => [
        'name' => 'Nombre',
        'purpose' => 'Finalidad',
        'legal_basis' => 'Base legal',
        'data_subjects' => 'Titulares',
        'data_categories' => 'Otras categorías de datos',
        'models' => 'Modelos',
        'recipients' => 'Destinatarios',
        'recipient_name' => 'Nombre',
        'role' => 'Rol',
        'country' => 'País (código ISO)',
        'international_transfers' => 'Transferencias internacionales',
        'international' => 'Internacional',
        'mechanism' => 'Mecanismo legal (art. 33)',
        'retention' => 'Retención',
        'security_measures' => 'Medidas de seguridad',
    ],

    'placeholders' => [
        'data_subjects' => 'clientes, empleados...',
    ],

    'help' => [
        'data_categories' => 'Datos no declarados en un modelo con #[PersonalData].',
        'models' => 'Los datos personales declarados en estos modelos entran en el registro.',
    ],

    'legal_basis' => [
        'consent' => 'Consentimiento (art. 7, I)',
        'legal_obligation' => 'Obligación legal (art. 7, II)',
        'public_policy' => 'Políticas públicas (art. 7, III)',
        'research' => 'Investigación (art. 7, IV)',
        'contract' => 'Ejecución de contrato (art. 7, V)',
        'exercise_of_rights' => 'Ejercicio de derechos (art. 7, VI)',
        'life_protection' => 'Protección de la vida (art. 7, VII)',
        'health_protection' => 'Tutela de la salud (art. 7, VIII)',
        'legitimate_interest' => 'Interés legítimo (art. 7, IX)',
        'credit_protection' => 'Protección del crédito (art. 7, X)',
        'fraud_prevention' => 'Prevención del fraude (art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Encargado',
        'controller' => 'Responsable (conjunto)',
        'public_authority' => 'Autoridad pública',
    ],

    'mechanisms' => [
        'adequacy' => 'País adecuado (art. 33, I)',
        'standard_clauses' => 'Cláusulas contractuales tipo (art. 33, II, b)',
        'specific_clauses' => 'Cláusulas contractuales específicas (art. 33, II, a)',
        'binding_corporate_rules' => 'Normas corporativas vinculantes (art. 33, II, c)',
        'specific_consent' => 'Consentimiento específico (art. 33, VIII)',
        'other' => 'Otro (art. 33)',
    ],

    'actions' => [
        'export' => 'Exportar registro (JSON)',
    ],
];
