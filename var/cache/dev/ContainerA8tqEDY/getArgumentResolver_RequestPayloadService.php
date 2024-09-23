<?php

namespace ContainerA8tqEDY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_RequestPayloadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'argument_resolver.request_payload' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('You can neither use "#[MapRequestPayload]" nor "#[MapQueryString]" since the Serializer component is not installed. Try running "composer require symfony/serializer-pack".');
    }
}
