<?php

return [
    'resource' => [
        'label' => 'Ishlov berish faoliyati',
        'plural_label' => 'Ishlov berish faoliyatlari',
    ],

    'fields' => [
        'name' => 'Nomi',
        'purpose' => 'Maqsad',
        'legal_basis' => 'Huquqiy asos',
        'data_subjects' => 'Ma\'lumot subyektlari',
        'data_categories' => 'Boshqa ma\'lumot toifalari',
        'models' => 'Modellar',
        'recipients' => 'Qabul qiluvchilar',
        'recipient_name' => 'Nomi',
        'role' => 'Rol',
        'country' => 'Mamlakat (ISO kodi)',
        'international_transfers' => 'Xalqaro uzatishlar',
        'international' => 'Xalqaro',
        'mechanism' => 'Huquqiy mexanizm (33-modda)',
        'retention' => 'Saqlash',
        'security_measures' => 'Xavfsizlik choralari',
    ],

    'placeholders' => [
        'data_subjects' => 'mijozlar, xodimlar...',
    ],

    'help' => [
        'data_categories' => 'Modelda #[PersonalData] bilan e\'lon qilinmagan ma\'lumotlar.',
        'models' => 'Ushbu modellarda e\'lon qilingan shaxsiy ma\'lumotlar reyestrga kiradi.',
    ],

    'legal_basis' => [
        'consent' => 'Rozilik (7-modda, I)',
        'legal_obligation' => 'Qonuniy majburiyat (7-modda, II)',
        'public_policy' => 'Davlat siyosati (7-modda, III)',
        'research' => 'Tadqiqot (7-modda, IV)',
        'contract' => 'Shartnomani bajarish (7-modda, V)',
        'exercise_of_rights' => 'Huquqlarni amalga oshirish (7-modda, VI)',
        'life_protection' => 'Hayotni himoya qilish (7-modda, VII)',
        'health_protection' => 'Sog\'liqni himoya qilish (7-modda, VIII)',
        'legitimate_interest' => 'Qonuniy manfaat (7-modda, IX)',
        'credit_protection' => 'Kreditni himoya qilish (7-modda, X)',
        'fraud_prevention' => 'Firibgarlikning oldini olish (11-modda, II, g)',
    ],

    'roles' => [
        'processor' => 'Ishlovchi',
        'controller' => 'Nazoratchi (birgalikdagi)',
        'public_authority' => 'Davlat organi',
    ],

    'mechanisms' => [
        'adequacy' => 'Yetarli himoyaga ega mamlakat (33-modda, I)',
        'standard_clauses' => 'Standart shartnoma bandlari (33-modda, II, b)',
        'specific_clauses' => 'Maxsus shartnoma bandlari (33-modda, II, a)',
        'binding_corporate_rules' => 'Majburiy korporativ qoidalar (33-modda, II, c)',
        'specific_consent' => 'Maxsus rozilik (33-modda, VIII)',
        'other' => 'Boshqa (33-modda)',
    ],

    'actions' => [
        'export' => 'Reyestrni eksport qilish (JSON)',
    ],
];
