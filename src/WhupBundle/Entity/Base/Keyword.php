<?php

namespace WhupBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserType
 *
 * @ORM\Table(name="Whup_Keyword")
 * @ORM\Entity(repositoryClass="WhupBundle\Repository\KeywordRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Keyword
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
     * @var string @ORM\Column(name="name", type="string", length=140)
     */
    protected $name;

    /**
     * @ORM\ManyToMany(targetEntity="WhupBundle\Entity\Base\Profile", mappedBy="keywords")
     */
    protected $profiles;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
