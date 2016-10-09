<?php

namespace Soflomo\Purifier\Factory\Filter;

use Interop\Container\ContainerInterface;
use Soflomo\Purifier\Filter\PurifierFilter;
use Zend\ServiceManager\Factory\FactoryInterface;

class PurifierFilterFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $purifier = $container->get('HTMLPurifierEngine');
        return new PurifierFilter($purifier);
    }
}