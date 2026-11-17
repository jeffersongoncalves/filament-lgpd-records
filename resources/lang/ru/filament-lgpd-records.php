<?php

return [
    'resource' => [
        'label' => 'Операция обработки',
        'plural_label' => 'Операции обработки',
    ],

    'fields' => [
        'name' => 'Название',
        'purpose' => 'Цель',
        'legal_basis' => 'Правовое основание',
        'data_subjects' => 'Субъекты данных',
        'data_categories' => 'Другие категории данных',
        'models' => 'Модели',
        'recipients' => 'Получатели',
        'recipient_name' => 'Название',
        'role' => 'Роль',
        'country' => 'Страна (код ISO)',
        'international_transfers' => 'Трансграничные передачи',
        'international' => 'Трансграничная',
        'mechanism' => 'Правовой механизм (ст. 33)',
        'retention' => 'Хранение',
        'security_measures' => 'Меры безопасности',
    ],

    'placeholders' => [
        'data_subjects' => 'клиенты, сотрудники...',
    ],

    'help' => [
        'data_categories' => 'Данные, не объявленные в модели через #[PersonalData].',
        'models' => 'Персональные данные, объявленные в этих моделях, входят в реестр.',
    ],

    'legal_basis' => [
        'consent' => 'Согласие (ст. 7, I)',
        'legal_obligation' => 'Юридическая обязанность (ст. 7, II)',
        'public_policy' => 'Государственная политика (ст. 7, III)',
        'research' => 'Исследования (ст. 7, IV)',
        'contract' => 'Исполнение договора (ст. 7, V)',
        'exercise_of_rights' => 'Осуществление прав (ст. 7, VI)',
        'life_protection' => 'Защита жизни (ст. 7, VII)',
        'health_protection' => 'Охрана здоровья (ст. 7, VIII)',
        'legitimate_interest' => 'Законный интерес (ст. 7, IX)',
        'credit_protection' => 'Защита кредита (ст. 7, X)',
        'fraud_prevention' => 'Предотвращение мошенничества (ст. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Обработчик',
        'controller' => 'Оператор (совместный)',
        'public_authority' => 'Государственный орган',
    ],

    'mechanisms' => [
        'adequacy' => 'Страна с адекватной защитой (ст. 33, I)',
        'standard_clauses' => 'Стандартные договорные положения (ст. 33, II, b)',
        'specific_clauses' => 'Специальные договорные положения (ст. 33, II, a)',
        'binding_corporate_rules' => 'Обязательные корпоративные правила (ст. 33, II, c)',
        'specific_consent' => 'Отдельное согласие (ст. 33, VIII)',
        'other' => 'Другое (ст. 33)',
    ],

    'actions' => [
        'export' => 'Экспорт реестра (JSON)',
    ],
];
