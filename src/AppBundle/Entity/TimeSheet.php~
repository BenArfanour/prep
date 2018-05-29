<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 29/05/18
 * Time: 09:07
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Projet
 *
 * @ORM\Entity
 * @ORM\Table(name="TimeSheet")
 */
class TimeSheet
{


    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User" ,inversedBy="user",cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="id_utilisateur",referencedColumnName="id")
     */
    private $sheets ;



    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Projet" ,inversedBy="projet",cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="id_projet",referencedColumnName="id")
     */
    private $sheeets ;


    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", length=255)
     */

     private $time ;


    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date", length=255)
     */
    private $date ;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
     private $type ;






    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return TimeSheet
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TimeSheet
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return TimeSheet
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set sheets
     *
     * @param \AppBundle\Entity\User $sheets
     *
     * @return TimeSheet
     */
    public function setSheets(\AppBundle\Entity\User $sheets = null)
    {
        $this->sheets = $sheets;

        return $this;
    }

    /**
     * Get sheets
     *
     * @return \AppBundle\Entity\User
     */
    public function getSheets()
    {
        return $this->sheets;
    }

    /**
     * Set sheeets
     *
     * @param \AppBundle\Entity\Projet $sheeets
     *
     * @return TimeSheet
     */
    public function setSheeets(\AppBundle\Entity\Projet $sheeets = null)
    {
        $this->sheeets = $sheeets;

        return $this;
    }

    /**
     * Get sheeets
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getSheeets()
    {
        return $this->sheeets;
    }
}
