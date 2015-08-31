<?php

namespace spec\WhupBundle\Entity\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GenericUserSpec extends ObjectBehavior
{
    function let()
    {
        $firstName = "Test";
        $secondName = "Whup";
        $email = "testwhup@whup.com";
        $username = "TestWhup";

        $this->beConstructedWith($username, $firstName, $secondName, $email);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('WhupBundle\Entity\Base\GenericUser');
    }

    function it_should_have_a_username()
    {
        $this->getUsername()->shouldReturn('TestWhup');
    }

    function it_should_have_a_firstName()
    {
        $this->getFirstName()->shouldReturn('Test');
    }

    function it_should_have_a_secondName()
    {
        $this->getSecondName()->shouldReturn('Whup');
    }

    function it_should_have_a_email()
    {
        $this->getEmail()->shouldReturn('testwhup@whup.com');
    }
}
