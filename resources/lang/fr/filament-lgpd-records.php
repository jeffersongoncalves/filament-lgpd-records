<?php

return [
    'resource' => [
        'label' => 'Activité de traitement',
        'plural_label' => 'Activités de traitement',
    ],

    'fields' => [
        'name' => 'Nom',
        'purpose' => 'Finalité',
        'legal_basis' => 'Base légale',
        'data_subjects' => 'Personnes concernées',
        'data_categories' => 'Autres catégories de données',
        'models' => 'Modèles',
        'recipients' => 'Destinataires',
        'recipient_name' => 'Nom',
        'role' => 'Rôle',
        'country' => 'Pays (code ISO)',
        'international_transfers' => 'Transferts internationaux',
        'international' => 'International',
        'mechanism' => 'Mécanisme juridique (art. 33)',
        'retention' => 'Conservation',
        'security_measures' => 'Mesures de sécurité',
    ],

    'placeholders' => [
        'data_subjects' => 'clients, salariés...',
    ],

    'help' => [
        'data_categories' => 'Données non déclarées dans un modèle avec #[PersonalData].',
        'models' => 'Les données personnelles déclarées dans ces modèles rejoignent le registre.',
    ],

    'legal_basis' => [
        'consent' => 'Consentement (art. 7, I)',
        'legal_obligation' => 'Obligation légale (art. 7, II)',
        'public_policy' => 'Politiques publiques (art. 7, III)',
        'research' => 'Recherche (art. 7, IV)',
        'contract' => 'Exécution d\'un contrat (art. 7, V)',
        'exercise_of_rights' => 'Exercice des droits (art. 7, VI)',
        'life_protection' => 'Protection de la vie (art. 7, VII)',
        'health_protection' => 'Protection de la santé (art. 7, VIII)',
        'legitimate_interest' => 'Intérêt légitime (art. 7, IX)',
        'credit_protection' => 'Protection du crédit (art. 7, X)',
        'fraud_prevention' => 'Prévention de la fraude (art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Sous-traitant',
        'controller' => 'Responsable (conjoint)',
        'public_authority' => 'Autorité publique',
    ],

    'mechanisms' => [
        'adequacy' => 'Pays adéquat (art. 33, I)',
        'standard_clauses' => 'Clauses contractuelles types (art. 33, II, b)',
        'specific_clauses' => 'Clauses contractuelles spécifiques (art. 33, II, a)',
        'binding_corporate_rules' => 'Règles d\'entreprise contraignantes (art. 33, II, c)',
        'specific_consent' => 'Consentement spécifique (art. 33, VIII)',
        'other' => 'Autre (art. 33)',
    ],

    'actions' => [
        'export' => 'Exporter le registre (JSON)',
    ],
];
