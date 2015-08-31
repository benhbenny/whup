<?php

namespace spec\WhupBundle\Entity\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserTypeSpec extends ObjectBehavior
{

    function let()
    {
        $libelle = "Candidate";
        $this->beConstructedWith($libelle);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('WhupBundle\Entity\Base\UserType');
    }

    function it_should_have_a_libelle()
    {
        $this->getLibelle()->shouldReturn("Candidate");
    }
}
