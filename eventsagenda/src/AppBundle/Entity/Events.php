<?php

    /* 
 * Symfony creArchiteX project
 * by Alexandre HARELIMANA
 * under Pr. Gregory Berger's advises
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
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
     * @var string
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var text
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var string
     * @ORM\Column(name="lieu", type="string" , length=255)
     */
    private $lieu;
    
    /**
     * @var date
     * @ORM\Column(name="debut", type="date")
     */
    private $debut;
    
    /**
     * @var date
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;
    
    /**
     * @var Categorie
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie", inversedBy="events", cascade={"persist"})
     */
    private $categorie;
    
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="events", cascade={"persist"})
     */
    private $user;
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
    }

}