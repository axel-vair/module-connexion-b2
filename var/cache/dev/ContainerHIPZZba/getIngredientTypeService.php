<?php

namespace ContainerHIPZZba;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIngredientTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\IngredientType' shared autowired service.
     *
     * @return \App\Form\IngredientType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/IngredientType.php';

        return $container->privates['App\\Form\\IngredientType'] = new \App\Form\IngredientType();
    }
}
