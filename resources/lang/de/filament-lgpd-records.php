<?php

return [
    'resource' => [
        'label' => 'Verarbeitungstätigkeit',
        'plural_label' => 'Verarbeitungstätigkeiten',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Zweck',
        'legal_basis' => 'Rechtsgrundlage',
        'data_subjects' => 'Betroffene',
        'data_categories' => 'Weitere Datenkategorien',
        'models' => 'Modelle',
        'recipients' => 'Empfänger',
        'recipient_name' => 'Name',
        'role' => 'Rolle',
        'country' => 'Land (ISO-Code)',
        'international_transfers' => 'Internationale Übermittlungen',
        'international' => 'International',
        'mechanism' => 'Rechtsgrundlage der Übermittlung (Art. 33)',
        'retention' => 'Aufbewahrung',
        'security_measures' => 'Sicherheitsmaßnahmen',
    ],

    'placeholders' => [
        'data_subjects' => 'Kunden, Mitarbeitende...',
    ],

    'help' => [
        'data_categories' => 'Daten, die nicht mit #[PersonalData] in einem Modell deklariert sind.',
        'models' => 'Die in diesen Modellen deklarierten personenbezogenen Daten werden in das Verzeichnis übernommen.',
    ],

    'legal_basis' => [
        'consent' => 'Einwilligung (Art. 7, I)',
        'legal_obligation' => 'Rechtliche Verpflichtung (Art. 7, II)',
        'public_policy' => 'Öffentliche Aufgaben (Art. 7, III)',
        'research' => 'Forschung (Art. 7, IV)',
        'contract' => 'Vertragserfüllung (Art. 7, V)',
        'exercise_of_rights' => 'Ausübung von Rechten (Art. 7, VI)',
        'life_protection' => 'Schutz des Lebens (Art. 7, VII)',
        'health_protection' => 'Gesundheitsschutz (Art. 7, VIII)',
        'legitimate_interest' => 'Berechtigtes Interesse (Art. 7, IX)',
        'credit_protection' => 'Kreditschutz (Art. 7, X)',
        'fraud_prevention' => 'Betrugsprävention (Art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Auftragsverarbeiter',
        'controller' => 'Verantwortlicher (gemeinsam)',
        'public_authority' => 'Behörde',
    ],

    'mechanisms' => [
        'adequacy' => 'Angemessenes Land (Art. 33, I)',
        'standard_clauses' => 'Standardvertragsklauseln (Art. 33, II, b)',
        'specific_clauses' => 'Spezifische Vertragsklauseln (Art. 33, II, a)',
        'binding_corporate_rules' => 'Verbindliche interne Datenschutzvorschriften (Art. 33, II, c)',
        'specific_consent' => 'Ausdrückliche Einwilligung (Art. 33, VIII)',
        'other' => 'Sonstige (Art. 33)',
    ],

    'actions' => [
        'export' => 'Verzeichnis exportieren (JSON)',
    ],
];
