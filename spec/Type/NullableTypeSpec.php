<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\NullableType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use StructureCheck\Type\TypeInterface;

class NullableTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType)
    {
        $this->beConstructedWith($childType);
        $this->shouldHaveType(NullableType::class);
    }
}
