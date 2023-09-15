<?php

namespace Container4hD887Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZmyC7gCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZmyC7gC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZmyC7gC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repository' => ['privates', 'App\\Repository\\IngredientRepository', 'getIngredientRepositoryService', true],
        ], [
            'manager' => '?',
            'repository' => 'App\\Repository\\IngredientRepository',
        ]);
    }
}
