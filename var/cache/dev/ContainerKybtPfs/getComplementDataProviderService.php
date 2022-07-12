<?php

namespace ContainerKybtPfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComplementDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataProvider\ComplementDataProvider' shared autowired service.
     *
     * @return \App\DataProvider\ComplementDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataProvider/ComplementDataProvider.php';

        return $container->privates['App\\DataProvider\\ComplementDataProvider'] = new \App\DataProvider\ComplementDataProvider(($container->privates['App\\Repository\\PortionFritesRepository'] ?? $container->load('getPortionFritesRepositoryService')), ($container->privates['App\\Repository\\BoissonRepository'] ?? $container->load('getBoissonRepositoryService')));
    }
}
