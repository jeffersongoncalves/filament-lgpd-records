<?php

return [
    'resource' => [
        'label' => '处理活动',
        'plural_label' => '处理活动',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'legal_basis' => '法律依据',
        'data_subjects' => '数据主体',
        'data_categories' => '其他数据类别',
        'models' => '模型',
        'recipients' => '接收方',
        'recipient_name' => '名称',
        'role' => '角色',
        'country' => '国家（ISO 代码）',
        'international_transfers' => '跨境传输',
        'international' => '跨境',
        'mechanism' => '法律机制（第33条）',
        'retention' => '保留期限',
        'security_measures' => '安全措施',
    ],

    'placeholders' => [
        'data_subjects' => '客户、员工…',
    ],

    'help' => [
        'data_categories' => '未通过 #[PersonalData] 在模型中声明的数据。',
        'models' => '这些模型中声明的个人数据会纳入记录。',
    ],

    'legal_basis' => [
        'consent' => '同意（第7条 I）',
        'legal_obligation' => '法定义务（第7条 II）',
        'public_policy' => '公共政策（第7条 III）',
        'research' => '研究（第7条 IV）',
        'contract' => '履行合同（第7条 V）',
        'exercise_of_rights' => '行使权利（第7条 VI）',
        'life_protection' => '保护生命（第7条 VII）',
        'health_protection' => '保护健康（第7条 VIII）',
        'legitimate_interest' => '合法利益（第7条 IX）',
        'credit_protection' => '信用保护（第7条 X）',
        'fraud_prevention' => '防止欺诈（第11条 II g）',
    ],

    'roles' => [
        'processor' => '受托处理者',
        'controller' => '控制者（共同）',
        'public_authority' => '公共机构',
    ],

    'mechanisms' => [
        'adequacy' => '充分保护国家（第33条 I）',
        'standard_clauses' => '标准合同条款（第33条 II b）',
        'specific_clauses' => '特定合同条款（第33条 II a）',
        'binding_corporate_rules' => '有约束力的公司规则（第33条 II c）',
        'specific_consent' => '特定同意（第33条 VIII）',
        'other' => '其他（第33条）',
    ],

    'actions' => [
        'export' => '导出记录（JSON）',
    ],
];
