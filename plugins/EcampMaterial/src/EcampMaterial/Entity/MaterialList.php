<?php

namespace EcampMaterial\Entity;

use EcampLib\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="p_material_lists")
 */
class MaterialList extends BaseEntity
{
    /**
     * @ORM\ManyToMany(targetEntity="EcampMaterial\Entity\MaterialItem")
     */
    private $items;

    /**
     * @ORM\OneToOne(targetEntity="EcampCore\Entity\CampCollaboration")
     */
    private $collaboration;

    /**
     * @ORM\ManyToOne(targetEntity="EcampCore\Entity\Camp")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $camp;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $name;

    public function __construct(Camp $camp)
    {
        parent::__construct();
        $this->camp = $camp;
        $this->items =  new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return EcampCore\Entity\EventPlugin
     */
    public function getCamp()
    {
        return $this->camp;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCollaboration($collaboration)
    {
        $this->collaboration = $collaboration;
    }

    public function getCollaboration()
    {
        return $this->collaboration;
    }

}
