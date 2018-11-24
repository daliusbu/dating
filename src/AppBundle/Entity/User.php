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

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $country;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $city;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    protected $dateOfBirth;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $gender;

    protected $plainpassword;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function setEmail($email)
    {
        $this->setUsername($email);
        return parent::setEmail($email);
    }


}