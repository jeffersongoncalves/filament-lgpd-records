<?php

return [
    'resource' => [
        'label' => '処理活動',
        'plural_label' => '処理活動',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'legal_basis' => '法的根拠',
        'data_subjects' => 'データ主体',
        'data_categories' => 'その他のデータカテゴリ',
        'models' => 'モデル',
        'recipients' => '提供先',
        'recipient_name' => '名称',
        'role' => '役割',
        'country' => '国（ISO コード）',
        'international_transfers' => '国際移転',
        'international' => '国際',
        'mechanism' => '法的仕組み（第33条）',
        'retention' => '保持期間',
        'security_measures' => '安全管理措置',
    ],

    'placeholders' => [
        'data_subjects' => '顧客、従業員…',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] でモデルに申告されていないデータ。',
        'models' => 'これらのモデルで申告された個人データが記録に含まれます。',
    ],

    'legal_basis' => [
        'consent' => '同意（第7条I）',
        'legal_obligation' => '法的義務（第7条II）',
        'public_policy' => '公共政策（第7条III）',
        'research' => '研究（第7条IV）',
        'contract' => '契約の履行（第7条V）',
        'exercise_of_rights' => '権利の行使（第7条VI）',
        'life_protection' => '生命の保護（第7条VII）',
        'health_protection' => '健康の保護（第7条VIII）',
        'legitimate_interest' => '正当な利益（第7条IX）',
        'credit_protection' => '信用の保護（第7条X）',
        'fraud_prevention' => '不正防止（第11条II g）',
    ],

    'roles' => [
        'processor' => '処理者',
        'controller' => '管理者（共同）',
        'public_authority' => '公的機関',
    ],

    'mechanisms' => [
        'adequacy' => '十分性認定国（第33条I）',
        'standard_clauses' => '標準契約条項（第33条II b）',
        'specific_clauses' => '個別契約条項（第33条II a）',
        'binding_corporate_rules' => '拘束的企業準則（第33条II c）',
        'specific_consent' => '個別の同意（第33条VIII）',
        'other' => 'その他（第33条）',
    ],

    'actions' => [
        'export' => '記録をエクスポート（JSON）',
    ],
];
