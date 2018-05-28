<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
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
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime")
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endstart", type="datetime")
     */
    private $endstart;


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
     * Set endstart
     *
     * @param \DateTime $endstart
     *
     * @return Projet
     */
    public function setEndstart($endstart)
    {
        $this->endstart = $endstart;

        return $this;
    }

    /**
     * Get endstart
     *
     * @return \DateTime
     */
    public function getEndstart()
    {
        return $this->endstart;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Projet
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Projet
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
