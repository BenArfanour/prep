<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/05/18
 * Time: 11:07
 */

namespace AppBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
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

    }


    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Projet", inversedBy="users")
     */

    private  $projets;



}