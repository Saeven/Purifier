<?php

namespace Soflomo\Purifier;

use Soflomo\Purifier\Factory\Filter\PurifierFilterFactory;
use Soflomo\Purifier\Factory\HtmlPurifierFactory;
use Soflomo\Purifier\Factory\View\Helper\PurifierHelperFactory;

return [

    'soflomo_purifier' => [
        'standalone' => false,
        'standalone_path' => 'vendor/ezyang/htmlpurifier/library/HTMLPurifier.standalone.php',
        'config' => [
        ],
    ],

    'service_manager' => [
        'factories' => [
            \HTMLPurifier::class => HtmlPurifierFactory::class,
        ],
    ],

    'input_filters' => [
        'factories' => [
            'htmlpurifier' => PurifierFilterFactory::class,
        ],
    ],

    'view_helpers' => [
        'factories' => [
            'htmlPurifier' => PurifierHelperFactory::class,
        ]
    ],
];