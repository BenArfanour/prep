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

/**
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
        $this->projets =  new ArrayCollection() ;
    }



    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Projet", mappedBy="users")
     */
    private  $projets;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom ;


    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */

    private $prenom ;

    /**
     * @var string
     *
     * @ORM\Column(name="datanaiss", type="date", length=255)
     */
    private $datanaiss;





}