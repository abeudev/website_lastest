<?php

namespace ContainerL4Mrmmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAboutControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AboutController' shared autowired service.
     *
     * @return \App\Controller\AboutController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AboutController'] = $instance = new \App\Controller\AboutController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\AboutController', $container));

        return $instance;
    }
}
