<?php

namespace WhupBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;
/**
 * GenericUser
 *
 * @ORM\Table(name="Whup_GenericUser")
 * @ORM\Entity(repositoryClass="WhupBundle\Repository\GenericUserRepository")
 * @ORM\HasLifecycleCallbacks
 */
class GenericUser
{
    /**
     *
     * @var integer @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @var string @ORM\Column(name="firstName", type="string", length=140)
     */
    protected $firstName;

    /**
     *
     * @var string @ORM\Column(name="secondName", type="string", length=140)
     */
    protected $secondName ;

    /**
     *
     * @var string @ORM\Column(name="email", type="string", length=255)
     */
    protected $email ;

    /**
     *
     * @var string @ORM\Column(name="username", type="string", length=70)
     */
    protected $username;

    public function __construct($username, $firstName, $secondName, $email)
    {
        $this->username = $username;
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getSecondName()
    {
        return $this->secondName;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
