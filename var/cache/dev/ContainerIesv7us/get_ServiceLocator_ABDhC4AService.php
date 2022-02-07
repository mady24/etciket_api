<?php

namespace ContainerIesv7us;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ABDhC4AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aBDhC4A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aBDhC4A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::addBank' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::addRegion' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::showBank' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'App\\Controller\\AdminController::showBankByID' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'App\\Controller\\AdminController::showRegion' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'App\\Controller\\AdminController::showRegionByID' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AdminController:addBank' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:addRegion' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:showBank' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'App\\Controller\\AdminController:showBankByID' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'App\\Controller\\AdminController:showRegion' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'App\\Controller\\AdminController:showRegionByID' => ['privates', '.service_locator.4F1yuVn', 'get_ServiceLocator_4F1yuVnService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AdminController::addBank' => '?',
            'App\\Controller\\AdminController::addRegion' => '?',
            'App\\Controller\\AdminController::showBank' => '?',
            'App\\Controller\\AdminController::showBankByID' => '?',
            'App\\Controller\\AdminController::showRegion' => '?',
            'App\\Controller\\AdminController::showRegionByID' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:addBank' => '?',
            'App\\Controller\\AdminController:addRegion' => '?',
            'App\\Controller\\AdminController:showBank' => '?',
            'App\\Controller\\AdminController:showBankByID' => '?',
            'App\\Controller\\AdminController:showRegion' => '?',
            'App\\Controller\\AdminController:showRegionByID' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
