<?php

return [
    'resource' => [
        'label' => 'İşleme faaliyeti',
        'plural_label' => 'İşleme faaliyetleri',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Amaç',
        'legal_basis' => 'Hukuki dayanak',
        'data_subjects' => 'İlgili kişiler',
        'data_categories' => 'Diğer veri kategorileri',
        'models' => 'Modeller',
        'recipients' => 'Alıcılar',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'country' => 'Ülke (ISO kodu)',
        'international_transfers' => 'Yurt dışı aktarımlar',
        'international' => 'Yurt dışı',
        'mechanism' => 'Hukuki mekanizma (md. 33)',
        'retention' => 'Saklama',
        'security_measures' => 'Güvenlik önlemleri',
    ],

    'placeholders' => [
        'data_subjects' => 'müşteriler, çalışanlar...',
    ],

    'help' => [
        'data_categories' => 'Bir modelde #[PersonalData] ile beyan edilmemiş veriler.',
        'models' => 'Bu modellerde beyan edilen kişisel veriler kayda dahil edilir.',
    ],

    'legal_basis' => [
        'consent' => 'Açık rıza (md. 7, I)',
        'legal_obligation' => 'Yasal yükümlülük (md. 7, II)',
        'public_policy' => 'Kamu politikası (md. 7, III)',
        'research' => 'Araştırma (md. 7, IV)',
        'contract' => 'Sözleşmenin ifası (md. 7, V)',
        'exercise_of_rights' => 'Hakların kullanılması (md. 7, VI)',
        'life_protection' => 'Hayatın korunması (md. 7, VII)',
        'health_protection' => 'Sağlığın korunması (md. 7, VIII)',
        'legitimate_interest' => 'Meşru menfaat (md. 7, IX)',
        'credit_protection' => 'Kredinin korunması (md. 7, X)',
        'fraud_prevention' => 'Dolandırıcılığın önlenmesi (md. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'Veri işleyen',
        'controller' => 'Veri sorumlusu (ortak)',
        'public_authority' => 'Kamu kurumu',
    ],

    'mechanisms' => [
        'adequacy' => 'Yeterli ülke (md. 33, I)',
        'standard_clauses' => 'Standart sözleşme hükümleri (md. 33, II, b)',
        'specific_clauses' => 'Özel sözleşme hükümleri (md. 33, II, a)',
        'binding_corporate_rules' => 'Bağlayıcı şirket kuralları (md. 33, II, c)',
        'specific_consent' => 'Özel açık rıza (md. 33, VIII)',
        'other' => 'Diğer (md. 33)',
    ],

    'actions' => [
        'export' => 'Kaydı dışa aktar (JSON)',
    ],
];
