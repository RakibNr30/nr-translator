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
    ]
];
