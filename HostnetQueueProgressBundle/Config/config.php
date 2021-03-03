<?php

return [
    'name'        => 'Queue Progress',
    'description' => 'Email queue watcher for Mautic.',
    'version'     => '2.0.0',
    'author'      => 'Hostnet Internet',
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
            'mautic.plugin.queueprogress.title' => [
                'route' => 'hostnet_queue_progress',
                'id' => 'plugin_hostnet_queueprogress',
                'iconClass' => 'fa-envelope',
                'priority' => -1
            ]
        ]
    ]
];
