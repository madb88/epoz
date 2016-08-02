<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
         $this->charts = new ArrayCollection();
    }

     /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Charts", mappedBy="user", cascade={"remove"})
     */
    
    private $charts;
    


    /**
     * Add charts
     *
     * @param \AppBundle\Entity\Charts $charts
     * @return User
     */
    public function addChart(\AppBundle\Entity\Charts $chart)
    {
        $this->charts[] = $chart;

        return $this;
    }

    /**
     * Remove charts
     *
     * @param \AppBundle\Entity\Charts $charts
     */
    public function removeChart(\AppBundle\Entity\Charts $charts)
    {
        $this->charts->removeElement($charts);
    }

    /**
     * Get charts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCharts()
    {
        return $this->charts;
    }
}
