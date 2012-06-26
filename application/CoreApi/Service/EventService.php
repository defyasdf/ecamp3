<?php

namespace CoreApi\Service;


use Core\Acl\DefaultAcl;
use Core\Service\ServiceBase;

use CoreApi\Entity\Event;
use CoreApi\Entity\Camp;
use CoreApi\Entity\Plugin;

use CoreApi\Entity\EventPrototype;


/**
 * @method CoreApi\Service\EventService Simulate
 */
class EventService
	extends ServiceBase
{
	
	/**
	 * Setup ACL
	 * @return void
	 */
	public function _setupAcl()
	{
		$this->acl->allow(DefaultAcl::MEMBER, $this, 'Create');
		$this->acl->allow(DefaultAcl::MEMBER, $this, 'Delete');
		$this->acl->allow(DefaultAcl::MEMBER, $this, 'Get');
		$this->acl->allow(DefaultAcl::MEMBER, $this, 'GetContainers');
		$this->acl->allow(DefaultAcl::MEMBER, $this, 'getPlugin');
	}
	
	/**
	 * @return CoreApi\Entity\Event | NULL
	 */
	public function Get($id)
	{	
		if(is_numeric($id))
		{	return $this->em->getRepository("\CoreApi\Entity\Event")->find($id);	}
			
		if($id instanceof Event)
		{	return $id;	}
		
		return null;
	}
	
	/**
	 * @return bool
	 */
	public function Delete($id)
	{
		$event = $this->Get($id);
		
		foreach( $event->getPlugins() as $plugin )
		{
			$plugin->getStrategyInstance()->remove();
		}
		
		$this->em->remove($event);
		
		return true;
	}
	
	/**
	 * @return CoreApi\Entity\Event
	 */
	public function Create(Camp $camp)
	{	
		/* TODO: ugly workaround, find better solution please */
		$this->em->getConnection();
		
		/* define event prototype; will come as a parameter of course */
		$prototype = $this->em->getRepository("CoreApi\Entity\EventPrototype")->find(  1);
		
		$event = new Event();
		$event->setCamp($camp);
		$event->setTitle(md5(time()));
		$event->setPrototype($prototype);
		
		$pluginConfigs = $prototype->getConfigs();
		foreach($pluginConfigs as $config)
		{
		    for($i=0; $i<$config->getDefaultInstances(); $i++)
		    {
		        $plugin = new Plugin();
		        $plugin->setEvent($event);
		        $plugin->setPluginConfig($config);
		        
		        $strategyClassName =  '\WebApp\Plugin\\' . $config->getPluginName() . '\Strategy';
		        $strategy = new $strategyClassName($this->em, $plugin);
		        $strategy->persist();
		        
		        $plugin->setStrategy($strategy);
		        $this->persist($plugin);
		    }
		}
		
		$this->persist($event);
	}
	
	public function GetContainers($id, $template)
	{   
		$event = $this->Get($id);
	    $mapitems =$template->getItems();
	    
	    $container = array();
	    foreach($mapitems as $item)
	    {
	        foreach($event->getPluginsByConfig($item->getPluginConfig()) as $plugin)
	        {
	            if( !isset($container[$item->getContainer()] ) )
	                $container[$item->getContainer()] = array();
	            
	            $container[$item->getContainer()][] = $plugin->getStrategyInstance(); 
	        }
	    }
	    
	    return $container;
	}
	
	/**
	 * @return CoreApi\Entity\Plugin
	 */
	public function getPlugin($id)
	{
		if(is_numeric($id))
		{
			return $this->em->getRepository("\CoreApi\Entity\Plugin")->find($id);
		}
			
		if($id instanceof Plugin)
		{
			return $id;
		}
		
		return null;
	}
	
}