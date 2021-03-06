<?php

namespace ContainerKybtPfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBoissonControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BoissonController' shared autowired service.
     *
     * @return \App\Controller\BoissonController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BoissonController.php';

        $container->services['App\\Controller\\BoissonController'] = $instance = new \App\Controller\BoissonController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\BoissonController', $container));

        return $instance;
    }
}
