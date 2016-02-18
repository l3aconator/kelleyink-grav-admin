<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/kelley-ink-grav-mampstack-5.6.18-0/apache2/htdocs/grav-admin/user/themes/kelleyink/blueprints.yaml',
    'modified' => 1455825628,
    'data' => [
        'name' => 'Kelleyink',
        'version' => '0.0.1',
        'description' => 'Custom theme for kelley.ink',
        'icon' => 'empire',
        'author' => [
            'name' => 'Bacon creative',
            'email' => 'hello@kylebaconcreative.com',
            'url' => 'http://www.kylebaconcreative.com'
        ],
        'homepage' => 'n/a',
        'demo' => 'n/a',
        'keywords' => 'n/a',
        'bugs' => 'n/a',
        'license' => 'n/a',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
