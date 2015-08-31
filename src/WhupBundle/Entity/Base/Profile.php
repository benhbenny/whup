<?php

namespace WhupBundle\Entity\Base;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="Whup_Profile")
 * @ORM\Entity(repositoryClass="WhupBundle\Repository\ProfileRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Profile
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
     * @var string @ORM\Column(name="title", type="string", length=160)
     */
    protected  $title;

    /**
     *
     * @var string @ORM\Column(name="phoneNumber", type="string", length=24)
     */
    protected  $phoneNumber;

    /**
     *
     * @var string @ORM\Column(name="adressPostal", type="string", length=255)
     */
    protected  $adressPostal;

    /**
     * @ORM\ManyToMany(targetEntity="WhupBundle\Entity\Base\Keyword", inversedBy="profiles")
     * @ORM\JoinColumn(name="keyword_id", referencedColumnName="id",nullable=true)
     */
    protected  $keywords;

    /**
     * @ORM\OneToOne(targetEntity="WhupBundle\Entity\Base\UserType")
     * @ORM\JoinColumn(name="userType_id", referencedColumnName="id", nullable=true)
     */
    protected  $userType;


    public function __construct($title, $phoneNumber, $adressPostal)
    {
        $this->title        = $title;
        $this->phoneNumber  = $phoneNumber;
        $this->adressPostal = $adressPostal;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }


    public function getAdressPostal()
    {
        return $this->adressPostal;
    }

    public function getKeywords()
    {
        $this->keywords = array('test whup');
        return $this->keywords;
    }

}
