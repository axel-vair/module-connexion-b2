<?php

namespace ContainerHIPZZba;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploaderExtensionRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime' shared service.
     *
     * @return \Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Twig/Extension/UploaderExtensionRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Templating/Helper/UploaderHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Templating/Helper/UploaderHelper.php';

        return $container->privates['Vich\\UploaderBundle\\Twig\\Extension\\UploaderExtensionRuntime'] = new \Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime(new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($container->privates['vich_uploader.storage.file_system'] ?? $container->load('getVichUploader_Storage_FileSystemService'))));
    }
}
