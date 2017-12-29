<?php

namespace AppBundle\Entity;

use FOS\Message\Model\PersonInterface;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class User extends BaseUser implements PersonInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    private $firstName;

    public function getFirstName()
        {
            return $this->firstName;
        }
    public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

    /**
     * @ORM\Column(type="string")
     */
    private $lastName;

    public function getLastName()
        {
            return $this->lastName;
        }
    public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

    /**
     * @ORM\Column(type="string")
     */
    private $adresse;
    public function getAdresse()
        {
            return $this->adresse;
        }
    public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }

    /**
     * @ORM\Column(type="string")
     */
    private $phone;
    public function getPhone()
        {
            return $this->phone;
        }
    public function setPhone($phone)
        {
            $this->phone = $phone;
        }

}
