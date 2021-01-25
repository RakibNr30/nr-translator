<?php

return [
    // admin menu
    'admin_menu' => [
        [
            "name" => "My Profile",
            "id" => "my_profile",
            "icon" => "fa-user-circle",
            "url" => "/admin/profile/account-info",
            "permission" => "my_profile",
            "children" => []
        ],
        [
            "name" => "Cms",
            "id" => "cms",
            "icon" => "fa-cogs",
            "url" => "",
            "permission" => "Cms",
            "children" => [
                [
                    "name" => "Home Banner",
                    "id" => "home_banner",
                    "icon" => "fa-arrow-right",
                    "url" => "/admin/home-banner",
                    "permission" => "home_banner",
                ],
                [
                    "name" => "About Us",
                    "id" => "about_us",
                    "icon" => "fa-arrow-right",
                    "url" => "/admin/about-us",
                    "permission" => "about_us",
                ],
                [
                    "name" => "Our History",
                    "id" => "our_history",
                    "icon" => "fa-arrow-right",
                    "url" => "/admin/our-history",
                    "permission" => "our_history",
                ],
                [
                    "name" => "Our Plan",
                    "id" => "our_plan",
                    "icon" => "fa-arrow-right",
                    "url" => "/admin/our-plan",
                    "permission" => "our_plan",
                ]
            ]
        ],
        [
            "name" => "App Settings",
            "id" => "app_settings",
            "icon" => "fa-tools",
            "url" => "",
            "permission" => "App Settings",
            "children" => [
                [
                    "name" => "Site",
                    "id" => "site",
                    "icon" => "fa-arrow-right",
                    "url" => "/admin/site",
                    "permission" => "Site",
                ],
                [
                    "name" => "Contact",
                    "id" => "contact",
                    "icon" => "fa-arrow-right",
                    "url" => "/admin/contact",
                    "permission" => "Contact",
                ],
                [
                    "name" => "Seo",
                    "id" => "seo",
                    "icon" => "fa-arrow-right",
                    "url" => "/admin/seo",
                    "permission" => "Seo",
                ]
            ]
        ]
    ],
    // user profile menu
    'profile_menu' => [
        [
            "name" => "Account Info",
            "id" => "account_info",
            "icon" => "fa-user",
            "url" => "/admin/profile/account-info",
            "permission" => "account_info",
            "children" => []
        ],
        [
            "name" => "Change Password",
            "id" => "change_password",
            "icon" => "fa-user",
            "url" => "/admin/profile/change-password",
            "permission" => "change_password",
            "children" => []
        ]
    ],
    // front menu
    'front_menu' => [
        [
            "name" => "Home",
            "id" => "home",
            "icon" => "",
            "url" => "/",
            "permission" => "",
            "children" => []
        ],
        [
            "name" => "About Us",
            "id" => "about_us",
            "icon" => "",
            "url" => "/about-us",
            "permission" => "",
            "children" => []
        ],
        [
            "name" => "Our Plan",
            "id" => "our_plan",
            "icon" => "",
            "url" => "/our-plan",
            "permission" => "",
            "children" => []
        ],
        [
            "name" => "Contact Us",
            "id" => "contact_us",
            "icon" => "",
            "url" => "/contact-us",
            "permission" => "",
            "children" => []
        ]
    ],
    "blood_groups" => [
        "A+" => "A+",
        "A-" => "A-",
        "B+" => "B+",
        "B-" => "B-",
        "O+" => "O+",
        "O-" => "O-",
        "AB+" => "AB+",
        "AB-" => "AB-",
    ],
    "genders" => [
        "Male" => "Male",
        "Female" => "Female",
        "Others" => "Others"
    ],
    // media collection
    'media_collection' => [
        'setting_site' => [
            'logo' => 'setting_site_logo',
            'favicon' => 'setting_site_favicon',
        ],
        'user' => [
            'avatar' => 'user_avatar',
        ]
    ],
    'image' => [
        'default' => [
            'logo' => '/front/images/default/logo.svg',
            'favicon' => '/front/images/default/favicon.svg',
        ]
    ],
    "selected_translate" => [
        [
            "title" => "English to Hindi",
            "slug" => "english-to-hindi"
        ],
        [
            "title" => "English to Tamil",
            "slug" => "english-to-tamil"
        ],
        [
            "title" => "English to Telugu",
            "slug" => "english-to-telugu"
        ],
        [
            "title" => "English to Malayalam",
            "slug" => "english-to-malayalam"
        ],
        [
            "title" => "Hindi to English",
            "slug" => "hindi-to-english"
        ],
        [
            "title" => "English to Marathi",
            "slug" => "english-to-marathi"
        ],
        [
            "title" => "English to Kannada",
            "slug" => "english-to-kannada"
        ],
        [
            "title" => "English to Gujarati",
            "slug" => "english-to-gujarati"
        ],
        [
            "title" => "Tamil to English",
            "slug" => "tamil-to-english"
        ],
        [
            "title" => "Malayalam to English",
            "slug" => "malayalam-to-english"
        ],
        [
            "title" => "English to Bengali",
            "slug" => "english-to-bengali"
        ],
        [
            "title" => "Telugu to English",
            "slug" => "telugu-to-english"
        ],
        [
            "title" => "Marathi to English",
            "slug" => "marathi-to-english"
        ],
        [
            "title" => "English to Punjabi",
            "slug" => "english-to-punjabi"
        ],
        [
            "title" => "Kannada to English",
            "slug" => "kannada-to-english"
        ],
        [
            "title" => "Gujarati to English",
            "slug" => "gujarati-to-english"
        ],
        [
            "title" => "Bengali to English",
            "slug" => "bengali-to-english"
        ],
        [
            "title" => "Punjabi to English",
            "slug" => "punjabi-to-english"
        ],
        [
            "title" => "English to Odia (Oriya)",
            "slug" => "english-to-odia-oriya"
        ],
        [
            "title" => "English to Urdu",
            "slug" => "english-to-urdu"
        ],
        [
            "title" => "Hindi to Malayalam",
            "slug" => "hindi-to-malayalam"
        ],
        [
            "title" => "Hindi to Telugu",
            "slug" => "hindi-to-telugu"
        ],
        [
            "title" => "English to Arabic",
            "slug" => "english-to-arabic"
        ],
        [
            "title" => "Arabic to English",
            "slug" => "arabic-to-english"
        ],
        [
            "title" => "Punjabi to Hindi",
            "slug" => "punjabi-to-hindi"
        ],
        [
            "title" => "Hindi to Tamil",
            "slug" => "hindi-to-tamil"
        ],
        [
            "title" => "Urdu to English",
            "slug" => "urdu-to-english"
        ],
        [
            "title" => "Filipino to English",
            "slug" => "filipino-to-english"
        ],
        [
            "title" => "Hindi to Punjabi",
            "slug" => "hindi-to-punjabi"
        ],
        [
            "title" => "Telugu to Hindi",
            "slug" => "telugu-to-hindi"
        ],
        [
            "title" => "English to Spanish",
            "slug" => "english-to-spanish"
        ],
        [
            "title" => "Odia (Oriya) to English",
            "slug" => "odia-oriya-to-english"
        ],
        [
            "title" => "English to Indonesian",
            "slug" => "english-to-indonesian"
        ],
        [
            "title" => "Tamil to Telugu",
            "slug" => "tamil-to-telugu"
        ],
        [
            "title" => "Malayalam to Tamil",
            "slug" => "malayalam-to-tamil"
        ],
        [
            "title" => "Urdu to Hindi",
            "slug" => "urdu-to-hindi"
        ],
        [
            "title" => "English to Filipino",
            "slug" => "english-to-filipino"
        ],
        [
            "title" => "Marathi to Hindi",
            "slug" => "marathi-to-hindi"
        ],
        [
            "title" => "Korean to English",
            "slug" => "korean-to-english"
        ],
        [
            "title" => "Hindi to Marathi",
            "slug" => "hindi-to-marathi"
        ],
        [
            "title" => "Tamil to Hindi",
            "slug" => "tamil-to-hindi"
        ],
        [
            "title" => "English to Nepali",
            "slug" => "english-to-nepali"
        ],
        [
            "title" => "Indonesian to English",
            "slug" => "indonesian-to-english"
        ],
        [
            "title" => "Telugu to Tamil",
            "slug" => "telugu-to-tamil"
        ],
        [
            "title" => "Hindi to Bengali",
            "slug" => "hindi-to-bengali"
        ],
        [
            "title" => "English to Korean",
            "slug" => "english-to-korean"
        ],
        [
            "title" => "English to Portuguese",
            "slug" => "english-to-portuguese"
        ],
        [
            "title" => "Hindi to Kannada",
            "slug" => "hindi-to-kannada"
        ],
        [
            "title" => "English to Vietnamese",
            "slug" => "english-to-vietnamese"
        ],
        [
            "title" => "English to Thai",
            "slug" => "english-to-thai"
        ],
        [
            "title" => "Gujarati to Hindi",
            "slug" => "gujarati-to-hindi"
        ],
        [
            "title" => "Hindi to Urdu",
            "slug" => "hindi-to-urdu"
        ],
        [
            "title" => "Hindi to Gujarati",
            "slug" => "hindi-to-gujarati"
        ],
        [
            "title" => "English to Persian",
            "slug" => "english-to-persian"
        ],
        [
            "title" => "Malayalam to Hindi",
            "slug" => "malayalam-to-hindi"
        ],
        [
            "title" => "Persian to English",
            "slug" => "persian-to-english"
        ],
        [
            "title" => "Bengali to Hindi",
            "slug" => "bengali-to-hindi"
        ],
        [
            "title" => "Nepali to English",
            "slug" => "nepali-to-english"
        ],
        [
            "title" => "Kannada to Hindi",
            "slug" => "kannada-to-hindi"
        ],
        [
            "title" => "Tamil to Malayalam",
            "slug" => "tamil-to-malayalam"
        ],
        [
            "title" => "Spanish to English",
            "slug" => "spanish-to-english"
        ],
        [
            "title" => "English to Japanese",
            "slug" => "english-to-japanese"
        ],
        [
            "title" => "Vietnamese to English",
            "slug" => "vietnamese-to-english"
        ],
        [
            "title" => "Portuguese to English",
            "slug" => "portuguese-to-english"
        ],
        [
            "title" => "Thai to English",
            "slug" => "thai-to-english"
        ],
        [
            "title" => "English to French",
            "slug" => "english-to-french"
        ],
        [
            "title" => "Arabic to Malayalam",
            "slug" => "arabic-to-malayalam"
        ],
        [
            "title" => "English to Chinese (Simplified)",
            "slug" => "english-to-chinese-simplified"
        ],
        [
            "title" => "English to Malay",
            "slug" => "english-to-malay"
        ],
        [
            "title" => "Japanese to English",
            "slug" => "japanese-to-english"
        ],
        [
            "title" => "English to Sinhala",
            "slug" => "english-to-sinhala"
        ],
        [
            "title" => "Amharic to English",
            "slug" => "amharic-to-english"
        ],
        [
            "title" => "Malay to English",
            "slug" => "malay-to-english"
        ],
        [
            "title" => "Sinhala to English",
            "slug" => "sinhala-to-english"
        ],
        [
            "title" => "English to Pashto",
            "slug" => "english-to-pashto"
        ],
        [
            "title" => "English to German",
            "slug" => "english-to-german"
        ],
        [
            "title" => "English to Amharic",
            "slug" => "english-to-amharic"
        ],
        [
            "title" => "Hindi to Arabic",
            "slug" => "hindi-to-arabic"
        ],
        [
            "title" => "English to Italian",
            "slug" => "english-to-italian"
        ],
        [
            "title" => "Arabic to Hindi",
            "slug" => "arabic-to-hindi"
        ],
        [
            "title" => "Malayalam to Arabic",
            "slug" => "malayalam-to-arabic"
        ],
        [
            "title" => "Khmer to English",
            "slug" => "khmer-to-english"
        ],
        [
            "title" => "French to English",
            "slug" => "french-to-english"
        ],
        [
            "title" => "English to Khmer",
            "slug" => "english-to-khmer"
        ],
        [
            "title" => "English to Chinese (Traditional)",
            "slug" => "english-to-chinese-traditional"
        ],
        [
            "title" => "Italian to English",
            "slug" => "italian-to-english"
        ],
        [
            "title" => "English to Myanmar (Burmese)",
            "slug" => "english-to-myanmar-burmese"
        ],
        [
            "title" => "English to Lao",
            "slug" => "english-to-lao"
        ],
        [
            "title" => "Greek to English",
            "slug" => "greek-to-english"
        ],
        [
            "title" => "Myanmar (Burmese) to English",
            "slug" => "myanmar-burmese-to-english"
        ],
        [
            "title" => "German to English",
            "slug" => "german-to-english"
        ],
        [
            "title" => "English to Greek",
            "slug" => "english-to-greek"
        ],
        [
            "title" => "Chinese (Simplified) to English",
            "slug" => "chinese-simplified-to-english"
        ],
        [
            "title" => "Pashto to English",
            "slug" => "pashto-to-english"
        ],
        [
            "title" => "Sinhala to Tamil",
            "slug" => "sinhala-to-tamil"
        ],
        [
            "title" => "Tamil to Malay",
            "slug" => "tamil-to-malay"
        ],
        [
            "title" => "Malay to Tamil",
            "slug" => "malay-to-tamil"
        ],
        [
            "title" => "Lao to English",
            "slug" => "lao-to-english"
        ],
        [
            "title" => "Arabic to Urdu",
            "slug" => "arabic-to-urdu"
        ],
        [
            "title" => "Bengali to Arabic",
            "slug" => "bengali-to-arabic"
        ],
        [
            "title" => "Urdu to Arabic",
            "slug" => "urdu-to-arabic"
        ],
        [
            "title" => "Arabic to Bengali",
            "slug" => "arabic-to-bengali"
        ]
    ]
];
