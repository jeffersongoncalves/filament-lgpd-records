<?php

return [
    'resource' => [
        'label' => 'عملية معالجة',
        'plural_label' => 'عمليات المعالجة',
    ],

    'fields' => [
        'name' => 'الاسم',
        'purpose' => 'الغرض',
        'legal_basis' => 'الأساس القانوني',
        'data_subjects' => 'أصحاب البيانات',
        'data_categories' => 'فئات بيانات أخرى',
        'models' => 'النماذج',
        'recipients' => 'المستلمون',
        'recipient_name' => 'الاسم',
        'role' => 'الدور',
        'country' => 'البلد (رمز ISO)',
        'international_transfers' => 'عمليات النقل الدولي',
        'international' => 'دولي',
        'mechanism' => 'الآلية القانونية (المادة 33)',
        'retention' => 'الاحتفاظ',
        'security_measures' => 'التدابير الأمنية',
    ],

    'placeholders' => [
        'data_subjects' => 'العملاء، الموظفون...',
    ],

    'help' => [
        'data_categories' => 'بيانات غير معلنة في نموذج باستخدام #[PersonalData].',
        'models' => 'تدخل البيانات الشخصية المعلنة في هذه النماذج ضمن السجل.',
    ],

    'legal_basis' => [
        'consent' => 'الموافقة (المادة 7، I)',
        'legal_obligation' => 'التزام قانوني (المادة 7، II)',
        'public_policy' => 'السياسات العامة (المادة 7، III)',
        'research' => 'البحث (المادة 7، IV)',
        'contract' => 'تنفيذ عقد (المادة 7، V)',
        'exercise_of_rights' => 'ممارسة الحقوق (المادة 7، VI)',
        'life_protection' => 'حماية الحياة (المادة 7، VII)',
        'health_protection' => 'حماية الصحة (المادة 7، VIII)',
        'legitimate_interest' => 'المصلحة المشروعة (المادة 7، IX)',
        'credit_protection' => 'حماية الائتمان (المادة 7، X)',
        'fraud_prevention' => 'منع الاحتيال (المادة 11، II، g)',
    ],

    'roles' => [
        'processor' => 'معالج',
        'controller' => 'متحكم (مشترك)',
        'public_authority' => 'سلطة عامة',
    ],

    'mechanisms' => [
        'adequacy' => 'بلد ذو مستوى حماية ملائم (المادة 33، I)',
        'standard_clauses' => 'البنود التعاقدية النموذجية (المادة 33، II، b)',
        'specific_clauses' => 'بنود تعاقدية خاصة (المادة 33، II، a)',
        'binding_corporate_rules' => 'قواعد الشركات الملزمة (المادة 33، II، c)',
        'specific_consent' => 'موافقة محددة (المادة 33، VIII)',
        'other' => 'أخرى (المادة 33)',
    ],

    'actions' => [
        'export' => 'تصدير السجل (JSON)',
    ],
];
