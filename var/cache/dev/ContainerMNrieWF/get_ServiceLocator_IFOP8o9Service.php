<?php

namespace ContainerMNrieWF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IFOP8o9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IFOP8o9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IFOP8o9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cart' => ['privates', '.errored..service_locator.IFOP8o9.App\\Entity\\Cart', NULL, 'Cannot autowire service ".service_locator.IFOP8o9": it references class "App\\Entity\\Cart" but no such service exists.'],
            'entityManager' => ['privates', '.errored.0wiiivg', NULL, 'Cannot determine controller argument for "App\\Controller\\CartdbController::delete()": the $entityManager argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?'],
        ], [
            'cart' => 'App\\Entity\\Cart',
            'entityManager' => '?',
        ]);
    }
}
