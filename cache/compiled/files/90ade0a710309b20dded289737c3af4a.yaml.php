<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/kelley-ink-grav-mampstack-5.6.18-0/apache2/htdocs/grav-admin/user/config/plugins/admin.yaml',
    'modified' => 1459392747,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'theme' => 'grav',
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true
        ],
        'edit_mode' => 'normal',
        'show_github_msg' => true,
        'google_fonts' => true,
        'enable_auto_updates_check' => true,
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => '30',
                'monthly' => '12',
                'visitors' => '20'
            ]
        ]
    ]
];
