<?php

namespace ContainerCZwkSh4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['session'] = (new \Symfony\Component\HttpFoundation\Session\SessionFactory(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory($container->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0), true), [0 => ($container->privates['session_listener'] ?? $container->getSessionListenerService()), 1 => 'onSessionUsage']))->createSession();
    }
}