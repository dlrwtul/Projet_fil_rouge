<?php

namespace ContainerPOSxz9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HybaK61Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hybaK61' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hybaK61'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'boissonTailleRepository' => ['privates', 'App\\Repository\\BoissonTailleRepository', 'getBoissonTailleRepositoryService', true],
            'burgerRepository' => ['privates', 'App\\Repository\\BurgerRepository', 'getBurgerRepositoryService', true],
            'commandeBoissonTailleRepository' => ['privates', 'App\\Repository\\CommandeBoissonTailleRepository', 'getCommandeBoissonTailleRepositoryService', true],
            'commandeRepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
            'decoder' => ['privates', 'serializer', 'getSerializerService', false],
            'denormalizer' => ['privates', 'serializer', 'getSerializerService', false],
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', true],
            'portionFritesRepository' => ['privates', 'App\\Repository\\PortionFritesRepository', 'getPortionFritesRepositoryService', true],
            'quartierRepository' => ['privates', 'App\\Repository\\QuartierRepository', 'getQuartierRepositoryService', true],
            'tokenStorage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'validatorInterface' => ['privates', 'validator', 'getValidatorService', false],
            'zoneRepository' => ['privates', 'App\\Repository\\ZoneRepository', 'getZoneRepositoryService', true],
        ], [
            'boissonTailleRepository' => 'App\\Repository\\BoissonTailleRepository',
            'burgerRepository' => 'App\\Repository\\BurgerRepository',
            'commandeBoissonTailleRepository' => 'App\\Repository\\CommandeBoissonTailleRepository',
            'commandeRepository' => 'App\\Repository\\CommandeRepository',
            'decoder' => '?',
            'denormalizer' => '?',
            'menuRepository' => 'App\\Repository\\MenuRepository',
            'portionFritesRepository' => 'App\\Repository\\PortionFritesRepository',
            'quartierRepository' => 'App\\Repository\\QuartierRepository',
            'tokenStorage' => '?',
            'validatorInterface' => '?',
            'zoneRepository' => 'App\\Repository\\ZoneRepository',
        ]);
    }
}
