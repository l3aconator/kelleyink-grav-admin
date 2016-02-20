<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/kelley-ink-grav-mampstack-5.6.18-0/apache2/htdocs/grav-admin/user/themes/kelleyink/blueprints/modular/services.yaml',
    'modified' => 1455937368,
    'data' => [
        'title' => 'Services',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'name' => [
                                                    'default' => 'modular/services',
                                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'default' => 'modular/services',
                                            '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'content' => [
                            'fields' => [
                                'uploads' => [
                                    'label' => 'Page Media (first one will be displayed next to your content)'
                                ],
                                'header.image_align' => [
                                    'type' => 'select',
                                    'label' => 'Image position',
                                    'classes' => 'fancy',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'right' => 'Right'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'services' => [
            'itemcolone' => [
                'servicename' => NULL,
                'icon' => NULL,
                'subtitle' => NULL
            ],
            'itemcoltwo' => [
                'servicename' => NULL,
                'icon' => NULL,
                'subtitle' => NULL
            ],
            'itemcolthree' => [
                'servicename' => NULL,
                'icon' => NULL,
                'subtitle' => NULL
            ],
            'itemcolfour' => [
                'servicename' => NULL,
                'icon' => NULL,
                'subtitle' => NULL
            ],
            'itemcolfive' => [
                'servicename' => NULL,
                'icon' => NULL,
                'subtitle' => NULL
            ],
            'itemcolsix' => [
                'servicename' => NULL,
                'icon' => NULL,
                'subtitle' => NULL
            ]
        ]
    ]
];
