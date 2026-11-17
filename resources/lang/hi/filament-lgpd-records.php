<?php

return [
    'resource' => [
        'label' => 'प्रसंस्करण गतिविधि',
        'plural_label' => 'प्रसंस्करण गतिविधियाँ',
    ],

    'fields' => [
        'name' => 'नाम',
        'purpose' => 'उद्देश्य',
        'legal_basis' => 'कानूनी आधार',
        'data_subjects' => 'डेटा विषय',
        'data_categories' => 'अन्य डेटा श्रेणियाँ',
        'models' => 'मॉडल',
        'recipients' => 'प्राप्तकर्ता',
        'recipient_name' => 'नाम',
        'role' => 'भूमिका',
        'country' => 'देश (ISO कोड)',
        'international_transfers' => 'अंतरराष्ट्रीय स्थानांतरण',
        'international' => 'अंतरराष्ट्रीय',
        'mechanism' => 'कानूनी तंत्र (अनु. 33)',
        'retention' => 'प्रतिधारण',
        'security_measures' => 'सुरक्षा उपाय',
    ],

    'placeholders' => [
        'data_subjects' => 'ग्राहक, कर्मचारी...',
    ],

    'help' => [
        'data_categories' => 'वह डेटा जो किसी मॉडल में #[PersonalData] से घोषित नहीं है।',
        'models' => 'इन मॉडलों में घोषित व्यक्तिगत डेटा रिकॉर्ड में शामिल होता है।',
    ],

    'legal_basis' => [
        'consent' => 'सहमति (अनु. 7, I)',
        'legal_obligation' => 'कानूनी दायित्व (अनु. 7, II)',
        'public_policy' => 'सार्वजनिक नीति (अनु. 7, III)',
        'research' => 'अनुसंधान (अनु. 7, IV)',
        'contract' => 'अनुबंध का निष्पादन (अनु. 7, V)',
        'exercise_of_rights' => 'अधिकारों का प्रयोग (अनु. 7, VI)',
        'life_protection' => 'जीवन की सुरक्षा (अनु. 7, VII)',
        'health_protection' => 'स्वास्थ्य सुरक्षा (अनु. 7, VIII)',
        'legitimate_interest' => 'वैध हित (अनु. 7, IX)',
        'credit_protection' => 'क्रेडिट सुरक्षा (अनु. 7, X)',
        'fraud_prevention' => 'धोखाधड़ी की रोकथाम (अनु. 11, II, g)',
    ],

    'roles' => [
        'processor' => 'प्रोसेसर',
        'controller' => 'नियंत्रक (संयुक्त)',
        'public_authority' => 'सार्वजनिक प्राधिकरण',
    ],

    'mechanisms' => [
        'adequacy' => 'पर्याप्त सुरक्षा वाला देश (अनु. 33, I)',
        'standard_clauses' => 'मानक संविदात्मक खंड (अनु. 33, II, b)',
        'specific_clauses' => 'विशिष्ट संविदात्मक खंड (अनु. 33, II, a)',
        'binding_corporate_rules' => 'बाध्यकारी कॉर्पोरेट नियम (अनु. 33, II, c)',
        'specific_consent' => 'विशिष्ट सहमति (अनु. 33, VIII)',
        'other' => 'अन्य (अनु. 33)',
    ],

    'actions' => [
        'export' => 'रिकॉर्ड निर्यात करें (JSON)',
    ],
];
