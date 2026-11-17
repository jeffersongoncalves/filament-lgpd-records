<?php

return [
    'resource' => [
        'label' => 'فعالیت پردازش',
        'plural_label' => 'فعالیت‌های پردازش',
    ],

    'fields' => [
        'name' => 'نام',
        'purpose' => 'هدف',
        'legal_basis' => 'مبنای قانونی',
        'data_subjects' => 'صاحبان داده',
        'data_categories' => 'دسته‌های دیگر داده',
        'models' => 'مدل‌ها',
        'recipients' => 'دریافت‌کنندگان',
        'recipient_name' => 'نام',
        'role' => 'نقش',
        'country' => 'کشور (کد ISO)',
        'international_transfers' => 'انتقال‌های بین‌المللی',
        'international' => 'بین‌المللی',
        'mechanism' => 'سازوکار قانونی (ماده 33)',
        'retention' => 'نگهداری',
        'security_measures' => 'اقدامات امنیتی',
    ],

    'placeholders' => [
        'data_subjects' => 'مشتریان، کارکنان...',
    ],

    'help' => [
        'data_categories' => 'داده‌هایی که در یک مدل با #[PersonalData] اعلام نشده‌اند.',
        'models' => 'داده‌های شخصی اعلام‌شده در این مدل‌ها وارد ثبت می‌شوند.',
    ],

    'legal_basis' => [
        'consent' => 'رضایت (ماده 7، I)',
        'legal_obligation' => 'تعهد قانونی (ماده 7، II)',
        'public_policy' => 'سیاست عمومی (ماده 7، III)',
        'research' => 'پژوهش (ماده 7، IV)',
        'contract' => 'اجرای قرارداد (ماده 7، V)',
        'exercise_of_rights' => 'اعمال حقوق (ماده 7، VI)',
        'life_protection' => 'حفاظت از جان (ماده 7، VII)',
        'health_protection' => 'حفاظت از سلامت (ماده 7، VIII)',
        'legitimate_interest' => 'منافع مشروع (ماده 7، IX)',
        'credit_protection' => 'حفاظت از اعتبار (ماده 7، X)',
        'fraud_prevention' => 'پیشگیری از تقلب (ماده 11، II، g)',
    ],

    'roles' => [
        'processor' => 'پردازشگر',
        'controller' => 'کنترل‌کننده (مشترک)',
        'public_authority' => 'مرجع عمومی',
    ],

    'mechanisms' => [
        'adequacy' => 'کشور با سطح حفاظت کافی (ماده 33، I)',
        'standard_clauses' => 'بندهای قراردادی استاندارد (ماده 33، II، b)',
        'specific_clauses' => 'بندهای قراردادی خاص (ماده 33، II، a)',
        'binding_corporate_rules' => 'قواعد الزام‌آور شرکتی (ماده 33، II، c)',
        'specific_consent' => 'رضایت مشخص (ماده 33، VIII)',
        'other' => 'سایر (ماده 33)',
    ],

    'actions' => [
        'export' => 'خروجی ثبت (JSON)',
    ],
];
