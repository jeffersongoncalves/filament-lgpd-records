<?php

return [
    'resource' => [
        'label' => 'Операція обробки',
        'plural_label' => 'Операції обробки',
    ],

    'fields' => [
        'name' => 'Назва',
        'purpose' => 'Мета',
        'legal_basis' => 'Правова підстава',
        'data_subjects' => 'Суб\'єкти даних',
        'data_categories' => 'Інші категорії даних',
        'models' => 'Моделі',
        'recipients' => 'Отримувачі',
        'recipient_name' => 'Назва',
        'role' => 'Роль',
        'country' => 'Країна (код ISO)',
        'international_transfers' => 'Транскордонні передачі',
        'international' => 'Транскордонна',
        'mechanism' => 'Правовий механізм (ст. 33)',
        'retention' => 'Зберігання',
        'security_measures' => 'Заходи безпеки',
    ],

    'placeholders' => [
        'data_subjects' => 'клієнти, працівники...',
    ],

    'help' => [
        'data_categories' => 'Дані, не оголошені в моделі через #[PersonalData].',
        'models' => 'Персональні дані, оголошені в цих моделях, входять до реєстру.',
    ],

    'legal_basis' => [
        'consent' => 'Згода (ст. 7, I)',
        'legal_obligation' => 'Юридичний обов\'язок (ст. 7, II)',
        'public_policy' => 'Державна політика (ст. 7, III)',
        'research' => 'Дослідження (ст. 7, IV)',
        'contract' => 'Виконання договору (ст. 7, V)',
        'exercise_of_rights' => 'Здійснення прав (ст. 7, VI)',
        'life_protection' => 'Захист життя (ст. 7, VII)',
        'health_protection' => 'Охорона здоров\'я (ст. 7, VIII)',
        'legitimate_interest' => 'Законний інтерес (ст. 7, IX)',
        'credit_protection' => 'Захист кредиту (ст. 7, X)',
        'fraud_prevention' => 'Запобігання шахрайству (ст. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Обробник',
        'controller' => 'Контролер (спільний)',
        'public_authority' => 'Державний орган',
    ],

    'mechanisms' => [
        'adequacy' => 'Країна з адекватним захистом (ст. 33, I)',
        'standard_clauses' => 'Стандартні договірні положення (ст. 33, II, b)',
        'specific_clauses' => 'Спеціальні договірні положення (ст. 33, II, a)',
        'binding_corporate_rules' => 'Обов\'язкові корпоративні правила (ст. 33, II, c)',
        'specific_consent' => 'Окрема згода (ст. 33, VIII)',
        'other' => 'Інше (ст. 33)',
    ],

    'actions' => [
        'export' => 'Експорт реєстру (JSON)',
    ],
];
