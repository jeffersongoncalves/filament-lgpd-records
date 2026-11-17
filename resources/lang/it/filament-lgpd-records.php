<?php

return [
    'resource' => [
        'label' => 'Attività di trattamento',
        'plural_label' => 'Attività di trattamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalità',
        'legal_basis' => 'Base giuridica',
        'data_subjects' => 'Interessati',
        'data_categories' => 'Altre categorie di dati',
        'models' => 'Modelli',
        'recipients' => 'Destinatari',
        'recipient_name' => 'Nome',
        'role' => 'Ruolo',
        'country' => 'Paese (codice ISO)',
        'international_transfers' => 'Trasferimenti internazionali',
        'international' => 'Internazionale',
        'mechanism' => 'Meccanismo giuridico (art. 33)',
        'retention' => 'Conservazione',
        'security_measures' => 'Misure di sicurezza',
    ],

    'placeholders' => [
        'data_subjects' => 'clienti, dipendenti...',
    ],

    'help' => [
        'data_categories' => 'Dati non dichiarati in un modello con #[PersonalData].',
        'models' => 'I dati personali dichiarati in questi modelli entrano nel registro.',
    ],

    'legal_basis' => [
        'consent' => 'Consenso (art. 7, I)',
        'legal_obligation' => 'Obbligo legale (art. 7, II)',
        'public_policy' => 'Politiche pubbliche (art. 7, III)',
        'research' => 'Ricerca (art. 7, IV)',
        'contract' => 'Esecuzione di un contratto (art. 7, V)',
        'exercise_of_rights' => 'Esercizio dei diritti (art. 7, VI)',
        'life_protection' => 'Tutela della vita (art. 7, VII)',
        'health_protection' => 'Tutela della salute (art. 7, VIII)',
        'legitimate_interest' => 'Legittimo interesse (art. 7, IX)',
        'credit_protection' => 'Tutela del credito (art. 7, X)',
        'fraud_prevention' => 'Prevenzione delle frodi (art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Responsabile del trattamento',
        'controller' => 'Titolare (congiunto)',
        'public_authority' => 'Autorità pubblica',
    ],

    'mechanisms' => [
        'adequacy' => 'Paese adeguato (art. 33, I)',
        'standard_clauses' => 'Clausole contrattuali tipo (art. 33, II, b)',
        'specific_clauses' => 'Clausole contrattuali specifiche (art. 33, II, a)',
        'binding_corporate_rules' => 'Norme vincolanti d\'impresa (art. 33, II, c)',
        'specific_consent' => 'Consenso specifico (art. 33, VIII)',
        'other' => 'Altro (art. 33)',
    ],

    'actions' => [
        'export' => 'Esporta registro (JSON)',
    ],
];
