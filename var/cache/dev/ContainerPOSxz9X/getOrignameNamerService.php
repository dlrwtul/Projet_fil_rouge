<?php

namespace ContainerPOSxz9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrignameNamerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Vich\UploaderBundle\Naming\OrignameNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/OrignameNamer.php';

        return $container->services['Vich\\UploaderBundle\\Naming\\OrignameNamer'] = new \Vich\UploaderBundle\Naming\OrignameNamer(($container->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $container->load('getTransliteratorService')));
    }
}
