<?php

namespace Soflomo\Purifier\Factory;

use HTMLPurifier;
use HTMLPurifier_Config;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class HtmlPurifierFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config   = $container->get('config');
        $options  = $config['soflomo_purifier']['config'];

        if ($config['soflomo_purifier']['standalone']) {
            include $config['soflomo_purifier']['standalone_path'];
        }

        $config   = HTMLPurifier_Config::createDefault();
        foreach ($options as $key => $value) {
            $config->set($key, $value);
        }

        $purifier = new HTMLPurifier($config);
        return $purifier;
    }
}
