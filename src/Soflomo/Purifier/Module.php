<?php

namespace Soflomo\Purifier;

use Soflomo\Purifier\Factory\Filter\PurifierFilterFactory;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../../../config/module.config.php';
    }

    public function onBootstrap($e){
        $filterChain = new \Zend\Filter\FilterChain();
        $filterChain
            ->getPluginManager()
            ->setFactory('CleanHtml', PurifierFilterFactory::class);
        $filterChain->attachByName('CleanHtml');
    }
}