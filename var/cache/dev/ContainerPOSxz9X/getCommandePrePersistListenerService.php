<?php

namespace ContainerPOSxz9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandePrePersistListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\CommandePrePersistListener' shared autowired service.
     *
     * @return \App\EventListener\CommandePrePersistListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/EventSubscriber/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/src/EventListener/CommandePrePersistListener.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ICalculMontantCommandeService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/CalculMontantCommandeService.php';

        return $container->privates['App\\EventListener\\CommandePrePersistListener'] = new \App\EventListener\CommandePrePersistListener(($container->privates['App\\Repository\\CommandeRepository'] ?? $container->load('getCommandeRepositoryService')), new \App\Service\CalculMontantCommandeService(), ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}