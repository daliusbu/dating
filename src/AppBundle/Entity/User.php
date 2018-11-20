<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 18.11.20
 * Time: 17.01
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy = "AUTO")
     *
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $name;

//    /**
//     * @ORM\Column(type="string", length=255)
//     *
//     */
//    protected $username;

//    /**
//     * @ORM\Column(type="string", length=255)
//     *
//     */
//    protected $password;

    protected $plainpassword;

//    /**
//     * @ORM\Column(type="string", length=255)
//     *
//     */
//    protected $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $phone;

    public function __construct()
    {
        parent::__construct();
    }



}