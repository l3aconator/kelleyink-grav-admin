<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/kelley-ink-grav-mampstack-5.6.18-0/apache2/htdocs/grav-admin/user/themes/kelleyink/blueprints/blog.yaml',
    'modified' => 1455224032,
    'data' => [
        'title' => 'Blog',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'child_type' => 'item',
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.child_type' => [
                                            'default' => 'item'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog List',
                            'fields' => [
                                'header.content.items' => [
                                    'type' => 'textarea',
                                    'yaml' => true,
                                    'label' => 'Items',
                                    'default' => '@self.children'
                                ],
                                'header.content.limit' => [
                                    'type' => 'text',
                                    'label' => 'Max Item Count',
                                    'default' => 5,
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'Order By',
                                    'default' => 'date',
                                    'options' => [
                                        'folder' => 'Folder',
                                        'title' => 'Title',
                                        'date' => 'Date',
                                        'default' => 'Default'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'Order',
                                    'default' => 'desc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ]
                                ],
                                'header.content.pagination' => [
                                    'type' => 'toggle',
                                    'label' => 'Pagination',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.content.url_taxonomy_filters' => [
                                    'type' => 'toggle',
                                    'label' => 'URL Taxonomy Filters',
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
                ]
            ]
        ]
    ]
];
