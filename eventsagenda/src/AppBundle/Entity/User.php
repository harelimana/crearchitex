<?php

    /* 
 * Symfony creArchiteX project
 * by Alexandre HARELIMANA
 * under Pr. Gregory Berger's advises
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
{
 /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;
    
     /**
     * @var email
     * @ORM\Column(name="username", type="string")
     */
    private $username;
    
    /**
     * @ORM\Column(name="profile_pic", type="string")
     */
    private $profile_pic;
    
     /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Events", mappedBy="user")
     */
    private $events;
    
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString() {
       return $this->id.' '.$this->username;
    }
}