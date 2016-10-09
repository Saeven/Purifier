<?php

namespace Soflomo\Purifier\Factory\View\Helper;

use Interop\Container\ContainerInterface;
use Soflomo\Purifier\View\Helper\PurifierHelper;
use Zend\ServiceManager\Factory\FactoryInterface;

class PurifierHelperFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $purifier = $container->get('HTMLPurifierEngine');
        return new PurifierHelper($purifier);
    }
}