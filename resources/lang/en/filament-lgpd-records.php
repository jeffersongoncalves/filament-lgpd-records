<?php

return [
    'resource' => [
        'label' => 'Processing activity',
        'plural_label' => 'Processing activities',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Purpose',
        'legal_basis' => 'Legal basis',
        'data_subjects' => 'Data subjects',
        'data_categories' => 'Other data categories',
        'models' => 'Models',
        'recipients' => 'Recipients',
        'recipient_name' => 'Name',
        'role' => 'Role',
        'country' => 'Country (ISO code)',
        'international_transfers' => 'International transfers',
        'international' => 'International',
        'mechanism' => 'Legal mechanism (art. 33)',
        'retention' => 'Retention',
        'security_measures' => 'Security measures',
    ],

    'placeholders' => [
        'data_subjects' => 'customers, employees...',
    ],

    'help' => [
        'data_categories' => 'Data not declared on a model with #[PersonalData].',
        'models' => 'The personal data declared on these models joins the record.',
    ],

    'legal_basis' => [
        'consent' => 'Consent (art. 7, I)',
        'legal_obligation' => 'Legal obligation (art. 7, II)',
        'public_policy' => 'Public policy (art. 7, III)',
        'research' => 'Research (art. 7, IV)',
        'contract' => 'Contract (art. 7, V)',
        'exercise_of_rights' => 'Exercise of rights (art. 7, VI)',
        'life_protection' => 'Protection of life (art. 7, VII)',
        'health_protection' => 'Health protection (art. 7, VIII)',
        'legitimate_interest' => 'Legitimate interest (art. 7, IX)',
        'credit_protection' => 'Credit protection (art. 7, X)',
        'fraud_prevention' => 'Fraud prevention (art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Processor',
        'controller' => 'Controller (shared)',
        'public_authority' => 'Public authority',
    ],

    'mechanisms' => [
        'adequacy' => 'Adequate country (art. 33, I)',
        'standard_clauses' => 'Standard contractual clauses (art. 33, II, b)',
        'specific_clauses' => 'Specific contractual clauses (art. 33, II, a)',
        'binding_corporate_rules' => 'Binding corporate rules (art. 33, II, c)',
        'specific_consent' => 'Specific consent (art. 33, VIII)',
        'other' => 'Other (art. 33)',
    ],

    'actions' => [
        'export' => 'Export ROPA (JSON)',
    ],
];
