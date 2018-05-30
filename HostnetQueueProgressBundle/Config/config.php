<?php

return [
    'name'        => 'Queue Progress',
    'description' => 'Email queue watcher for Mautic.',
    'version'     => '1.0.0',
    'author'      => 'Henrique Rodrigues <henrique@hostnet.com.br>',
    'routes'      => [
        'main' => [
            'hostnet_queue_progress' => [
                'path'       => '/queueprogress',
                'controller' => 'HostnetQueueProgressBundle:QueueProgress:queueprogress',
            ]
        ]
    ],
    'menu'     => [
        'main' => [
            'priority' => -1,
            'items'    => [
                'mautic.plugin.queueprogress.title' => [
                    'route' => 'hostnet_queue_progress',
                    'id' => 'plugin_hostnet_queueprogress',
                    'iconClass' => 'fa-envelope'
                ]
            ]
        ]
    ]
];
