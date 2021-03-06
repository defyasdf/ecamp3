<?php
namespace EcampWeb;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getControllerConfig()
    {
        return include __DIR__ . '/config/controller.config.php';
    }

    public function getControllerPluginConfig()
    {
        return include __DIR__ . '/config/controllerplugin.config.php';
    }

    public function getViewHelperConfig()
    {
        return include __DIR__ . '/config/viewhelper.config.php';
    }
}
