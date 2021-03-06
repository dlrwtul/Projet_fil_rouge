<?php

namespace ContainerPOSxz9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JHQ2RKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jHQ_2RK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jHQ_2RK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'menu' => ['privates', '.errored..service_locator.jHQ_2RK.App\\Entity\\Menu', NULL, 'Cannot autowire service ".service_locator.jHQ_2RK": it references class "App\\Entity\\Menu" but no such service exists.'],
        ], [
            'menu' => 'App\\Entity\\Menu',
        ]);
    }
}
