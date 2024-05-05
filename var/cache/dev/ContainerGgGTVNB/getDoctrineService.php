<?php

namespace ContainerGgGTVNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ConnectionRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/AbstractManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Registry.php';

        return $container->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($container, $container->parameters['doctrine.connections'], $container->parameters['doctrine.entity_managers'], 'default', 'default');
    }
}
