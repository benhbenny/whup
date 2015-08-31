<?php

namespace spec\WhupBundle\Entity\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProfileSpec extends ObjectBehavior
{
    function let()
    {
        $title          = "Whup Profile Title";
        $phoneNumber    = "0606060606";
        $adressPostal         = "2011 avenue test whup, 45600 futur";

        $this->beConstructedWith($title, $phoneNumber, $adressPostal);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('WhupBundle\Entity\Base\Profile');
    }

    function it_should_have_a_Title()
    {
        $this->getTitle()->shouldReturn("Whup Profile Title");
    }

    function it_should_have_a_phoneNumber()
    {
        $this->getPhoneNumber()->shouldReturn("0606060606");
    }

    function it_should_have_a_adressPostal()
    {
        $this->getAdressPostal()->shouldReturn("2011 avenue test whup, 45600 futur");
    }

    function it_should_have_a_Keywords()
    {
        $this->getKeywords()->shouldBeArray();
       //$this->getKeywords()->shouldHaveCount(1);
    }
}
