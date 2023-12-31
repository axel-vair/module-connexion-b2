<?php

namespace Container4hD887Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EeqUE6kService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EeqUE6k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EeqUE6k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ingredientEntity' => ['privates', '.errored..service_locator.EeqUE6k.App\\Entity\\Ingredient', NULL, 'Cannot autowire service ".service_locator.EeqUE6k": it needs an instance of "App\\Entity\\Ingredient" but this type has been excluded in "config/services.yaml".'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repository' => ['privates', 'App\\Repository\\IngredientRepository', 'getIngredientRepositoryService', true],
        ], [
            'ingredientEntity' => 'App\\Entity\\Ingredient',
            'manager' => '?',
            'repository' => 'App\\Repository\\IngredientRepository',
        ]);
    }
}
