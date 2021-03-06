<?php

namespace EcampLib\Service;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Doctrine\ORM\EntityManager;
use Zend\Authentication\AuthenticationService;

/**
 * Provides wrapped services for all service classes
 * Pattern: Pattern: Ecamp*\Service\*
 */
class AbstractServiceFactory implements AbstractFactoryInterface
{
    private $inFactory = 0;

    private $orm;

    private $pattern = "/^Ecamp(\w+)\\\\Service\\\\(\w+)$/";

    public function __construct($orm = null)
    {
        $this->orm = $orm ?: 'doctrine.entitymanager.orm_default';
    }

    private function getServiceFactoryName($serviceName)
    {
        return $serviceName.'ServiceFactory';
    }

    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        return preg_match($this->pattern, $requestedName) && class_exists($this->getServiceFactoryName($requestedName));
    }

    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $this->inFactory++;

        /* Create service with specific service factory which does the wiring */
        /* e.g. Ecamp*\Service\***ServiceFactory */
        $serviceFactoryName = $this->getServiceFactoryName($requestedName);
        $serviceFactory = new $serviceFactoryName;
        $service = $serviceFactory->createService($serviceLocator);

        /* Inject common dependencies (e.g. dependencies of ServiceBase class) */
        $service->setEntityManager($serviceLocator->get($this->orm));
        $service->setAcl($serviceLocator->get('EcampCore\Acl'));

        $authService = new AuthenticationService();

        if ($authService->hasIdentity()) {
            $authId = $authService->getIdentity();
            $service->setMe($serviceLocator->get('EcampCore\Repository\User')->find($authId));
        }

        $this->inFactory--;

        if ($this->inFactory > 0) {
            return $service;
        } else {
            return new ServiceWrapper($service);
        }
    }
}
