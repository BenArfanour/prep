<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Projet
 */
class Projet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \DateTime
     */
    private $startdate;

    /**
     * @var \DateTime
     */
    private $enddate;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client" ,inversedBy="projets",cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="id_client",referencedColumnName="id")
     */
    private  $client;


    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="projets")
     * @ORM\JoinTable(name="TimeSheet")
     */

    private $users;



    public function  __construct()
    {
        $this->users = new ArrayCollection() ;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Projet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Projet
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Projet
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }
}
