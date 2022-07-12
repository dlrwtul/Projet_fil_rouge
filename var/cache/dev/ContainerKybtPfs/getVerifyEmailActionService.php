<?php

namespace ContainerKybtPfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVerifyEmailActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VerifyEmailAction' shared autowired service.
     *
     * @return \App\Controller\VerifyEmailAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/VerifyEmailAction.php';

        $container->services['App\\Controller\\VerifyEmailAction'] = $instance = new \App\Controller\VerifyEmailAction();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\VerifyEmailAction', $container));

        return $instance;
    }
}
