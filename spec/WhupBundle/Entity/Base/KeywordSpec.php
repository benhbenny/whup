<?php

namespace spec\WhupBundle\Entity\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KeywordSpec extends ObjectBehavior
{
    function let()
    {
        $name = "Symfony";
        $this->beConstructedWith($name);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('WhupBundle\Entity\Base\Keywords');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldreturn("Symfony");
    }

}
