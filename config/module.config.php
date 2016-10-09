<?php

namespace Soflomo\Purifier;

use Soflomo\Purifier\Factory\Filter\PurifierFilterFactory;
use Soflomo\Purifier\Factory\HtmlPurifierFactory;
use Soflomo\Purifier\Factory\View\Helper\PurifierHelperFactory;
use Soflomo\Purifier\Filter\PurifierFilter;

return [

    'soflomo_purifier' => [
        'standalone' => false,
        'standalone_path' => 'vendor/ezyang/htmlpurifier/library/HTMLPurifier.standalone.php',
        'config' => [

        ],
    ],

    'service_manager' => [
        'factories' => [
            'HTMLPurifierEngine' => HtmlPurifierFactory::class,
            'CleanHtml' => PurifierFilterFactory::class,
        ],
    ],

    'view_helpers' => [
        'factories' => [
            'htmlPurifier' => PurifierHelperFactory::class,
        ],
    ],
];