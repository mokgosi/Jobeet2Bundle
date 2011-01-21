<?php

namespace Application\Jobeet2Bundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Jobeet2Extension extends Extension
{
    public function configLoad($config, ContainerBuilder $container)
    {
        if (!$container->hasDefinition('jobeet2')) {
            $loader = new XmlFileLoader($container, __DIR__.'/../Resources/config');
            $loader->load('jobeet2.xml');
        }

        if (isset($config['active_days']))
        {
            $container->setParameter('jobeet2.active_days',$config['active_days']);
        }

        
    }

    public function getXsdValidationBasePath()
    {
        return null;
        //return __DIR__.'/../Resources/config/';
    }

    public function getNamespace()
    {
        return 'http://www.symfony-project.org/schema/dic/symfony';
    }

    public function getAlias()
    {
        return 'jobeet2';
    }
}