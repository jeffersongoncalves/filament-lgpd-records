<?php

return [
    'resource' => [
        'label' => 'Verwerkingsactiviteit',
        'plural_label' => 'Verwerkingsactiviteiten',
    ],

    'fields' => [
        'name' => 'Naam',
        'purpose' => 'Doel',
        'legal_basis' => 'Rechtsgrond',
        'data_subjects' => 'Betrokkenen',
        'data_categories' => 'Andere gegevenscategorieën',
        'models' => 'Modellen',
        'recipients' => 'Ontvangers',
        'recipient_name' => 'Naam',
        'role' => 'Rol',
        'country' => 'Land (ISO-code)',
        'international_transfers' => 'Internationale doorgiften',
        'international' => 'Internationaal',
        'mechanism' => 'Juridisch mechanisme (art. 33)',
        'retention' => 'Bewaring',
        'security_measures' => 'Beveiligingsmaatregelen',
    ],

    'placeholders' => [
        'data_subjects' => 'klanten, medewerkers...',
    ],

    'help' => [
        'data_categories' => 'Gegevens die niet met #[PersonalData] in een model zijn opgegeven.',
        'models' => 'De persoonsgegevens die in deze modellen zijn opgegeven, komen in het register.',
    ],

    'legal_basis' => [
        'consent' => 'Toestemming (art. 7, I)',
        'legal_obligation' => 'Wettelijke verplichting (art. 7, II)',
        'public_policy' => 'Overheidsbeleid (art. 7, III)',
        'research' => 'Onderzoek (art. 7, IV)',
        'contract' => 'Uitvoering van een overeenkomst (art. 7, V)',
        'exercise_of_rights' => 'Uitoefening van rechten (art. 7, VI)',
        'life_protection' => 'Bescherming van het leven (art. 7, VII)',
        'health_protection' => 'Bescherming van de gezondheid (art. 7, VIII)',
        'legitimate_interest' => 'Gerechtvaardigd belang (art. 7, IX)',
        'credit_protection' => 'Kredietbescherming (art. 7, X)',
        'fraud_prevention' => 'Fraudepreventie (art. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Verwerker',
        'controller' => 'Verwerkingsverantwoordelijke (gezamenlijk)',
        'public_authority' => 'Overheidsinstantie',
    ],

    'mechanisms' => [
        'adequacy' => 'Passend land (art. 33, I)',
        'standard_clauses' => 'Standaardcontractbepalingen (art. 33, II, b)',
        'specific_clauses' => 'Specifieke contractbepalingen (art. 33, II, a)',
        'binding_corporate_rules' => 'Bindende bedrijfsvoorschriften (art. 33, II, c)',
        'specific_consent' => 'Specifieke toestemming (art. 33, VIII)',
        'other' => 'Overig (art. 33)',
    ],

    'actions' => [
        'export' => 'Register exporteren (JSON)',
    ],
];
