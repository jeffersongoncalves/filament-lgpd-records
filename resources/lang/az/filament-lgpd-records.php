<?php

return [
    'resource' => [
        'label' => 'Emal əməliyyatı',
        'plural_label' => 'Emal əməliyyatları',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Məqsəd',
        'legal_basis' => 'Hüquqi əsas',
        'data_subjects' => 'Məlumat subyektləri',
        'data_categories' => 'Digər məlumat kateqoriyaları',
        'models' => 'Modellər',
        'recipients' => 'Alıcılar',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'country' => 'Ölkə (ISO kodu)',
        'international_transfers' => 'Beynəlxalq ötürmələr',
        'international' => 'Beynəlxalq',
        'mechanism' => 'Hüquqi mexanizm (mad. 33)',
        'retention' => 'Saxlama',
        'security_measures' => 'Təhlükəsizlik tədbirləri',
    ],

    'placeholders' => [
        'data_subjects' => 'müştərilər, işçilər...',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] ilə modeldə elan edilməmiş məlumatlar.',
        'models' => 'Bu modellərdə elan edilmiş şəxsi məlumatlar reyestrə daxil olur.',
    ],

    'legal_basis' => [
        'consent' => 'Razılıq (mad. 7, I)',
        'legal_obligation' => 'Hüquqi öhdəlik (mad. 7, II)',
        'public_policy' => 'Dövlət siyasəti (mad. 7, III)',
        'research' => 'Tədqiqat (mad. 7, IV)',
        'contract' => 'Müqavilənin icrası (mad. 7, V)',
        'exercise_of_rights' => 'Hüquqların həyata keçirilməsi (mad. 7, VI)',
        'life_protection' => 'Həyatın qorunması (mad. 7, VII)',
        'health_protection' => 'Sağlamlığın qorunması (mad. 7, VIII)',
        'legitimate_interest' => 'Qanuni maraq (mad. 7, IX)',
        'credit_protection' => 'Kreditin qorunması (mad. 7, X)',
        'fraud_prevention' => 'Fırıldaqçılığın qarşısının alınması (mad. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Emal edən',
        'controller' => 'Nəzarətçi (birgə)',
        'public_authority' => 'Dövlət orqanı',
    ],

    'mechanisms' => [
        'adequacy' => 'Adekvat ölkə (mad. 33, I)',
        'standard_clauses' => 'Standart müqavilə bəndləri (mad. 33, II, b)',
        'specific_clauses' => 'Xüsusi müqavilə bəndləri (mad. 33, II, a)',
        'binding_corporate_rules' => 'Korporativ məcburi qaydalar (mad. 33, II, c)',
        'specific_consent' => 'Xüsusi razılıq (mad. 33, VIII)',
        'other' => 'Digər (mad. 33)',
    ],

    'actions' => [
        'export' => 'Reyestri ixrac et (JSON)',
    ],
];
