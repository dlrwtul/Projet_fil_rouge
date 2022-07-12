<?php

namespace ContainerKybtPfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMinimalPropertiesValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validator\Constraints\MinimalPropertiesValidator' shared autowired service.
     *
     * @return \App\Validator\Constraints\MinimalPropertiesValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Validator/Constraints/MinimalPropertiesValidator.php';

        return $container->privates['App\\Validator\\Constraints\\MinimalPropertiesValidator'] = new \App\Validator\Constraints\MinimalPropertiesValidator();
    }
}