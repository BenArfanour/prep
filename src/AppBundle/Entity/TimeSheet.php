<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 29/05/18
 * Time: 09:07
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use fadosProduccions\fullCalendarBundle\Entity\Event as BaseEvent;



/**
 * Projet
 *
 * @ORM\Entity
 * @ORM\Table(name="TimeSheet")
 */
class TimeSheet extends BaseEvent
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
     * @ORM\JoinColumn(name="id_projet",referencedColumnName="id",nullable=true)
     */
    private $sheeets ;








    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=true)
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


    public function toArray()
    {
        return array(
            'id'               => $this->id,
            'title'            => $this->sheets->getNom(),
            'start'            => $this->startDatetime->format("Y-m-d H:i:sP"),
            'end'              => $this->endDatetime->format("Y-m-d  H:i:sP"),
            'backgroundColor'  => $this->bgColor,
            'borderColor'      => $this->bgColor,
            'textColor'        => $this->fgColor,
            'className'        => $this->cssClass,
            'allDay'           => $this->allDay,
            'type'             =>$this->type,
            //'id_projet'        =>$this->sheeets->getNom() ,
            //'id_utilisateur '  =>$this->sheeets->getNom(),

        );
    }



}
