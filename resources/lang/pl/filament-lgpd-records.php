<?php

return [
    'resource' => [
        'label' => 'Czynność przetwarzania',
        'plural_label' => 'Czynności przetwarzania',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'purpose' => 'Cel',
        'legal_basis' => 'Podstawa prawna',
        'data_subjects' => 'Osoby, których dane dotyczą',
        'data_categories' => 'Inne kategorie danych',
        'models' => 'Modele',
        'recipients' => 'Odbiorcy',
        'recipient_name' => 'Nazwa',
        'role' => 'Rola',
        'country' => 'Kraj (kod ISO)',
        'international_transfers' => 'Przekazania międzynarodowe',
        'international' => 'Międzynarodowe',
        'mechanism' => 'Mechanizm prawny (art. 33)',
        'retention' => 'Retencja',
        'security_measures' => 'Środki bezpieczeństwa',
    ],

    'placeholders' => [
        'data_subjects' => 'klienci, pracownicy...',
    ],

    'help' => [
        'data_categories' => 'Dane niezadeklarowane w modelu przez #[PersonalData].',
        'models' => 'Dane osobowe zadeklarowane w tych modelach trafiają do rejestru.',
    ],

    'legal_basis' => [
        'consent' => 'Zgoda (art. 7, I)',
        'legal_obligation' => 'Obowiązek prawny (art. 7, II)',
        'public_policy' => 'Polityka publiczna (art. 7, III)',
        'research' => 'Badania (art. 7, IV)',
        'contract' => 'Wykonanie umowy (art. 7, V)',
        'exercise_of_rights' => 'Wykonywanie praw (art. 7, VI)',
        'life_protection' => 'Ochrona życia (art. 7, VII)',
        'health_protection' => 'Ochrona zdrowia (art. 7, VIII)',
        'legitimate_interest' => 'Prawnie uzasadniony interes (art. 7, IX)',
        'credit_protection' => 'Ochrona kredytu (art. 7, X)',
        'fraud_prevention' => 'Zapobieganie oszustwom (art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Podmiot przetwarzający',
        'controller' => 'Administrator (współadministrator)',
        'public_authority' => 'Organ publiczny',
    ],

    'mechanisms' => [
        'adequacy' => 'Kraj o odpowiednim poziomie ochrony (art. 33, I)',
        'standard_clauses' => 'Standardowe klauzule umowne (art. 33, II, b)',
        'specific_clauses' => 'Szczególne klauzule umowne (art. 33, II, a)',
        'binding_corporate_rules' => 'Wiążące reguły korporacyjne (art. 33, II, c)',
        'specific_consent' => 'Szczególna zgoda (art. 33, VIII)',
        'other' => 'Inny (art. 33)',
    ],

    'actions' => [
        'export' => 'Eksportuj rejestr (JSON)',
    ],
];
