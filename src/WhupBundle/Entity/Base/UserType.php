<?php

namespace WhupBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserType
 *
 * @ORM\Table(name="Whup_UserType")
 * @ORM\Entity(repositoryClass="WhupBundle\Repository\UserTypeRepository")
 * @ORM\HasLifecycleCallbacks
 */
class UserType
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
     * @var string @ORM\Column(name="libelle", type="string", length=160)
     */
    protected $libelle;

    public function __construct($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

}
