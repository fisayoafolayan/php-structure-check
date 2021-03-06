<?php

declare(strict_types=1);

namespace Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\ResultInterface;

class OptionalType implements TypeInterface
{
    private TypeInterface $child;

    public function __construct(TypeInterface $child)
    {
        $this->child = $child;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return ResultInterface
     */
    public function check(string $key, $value): ResultInterface
    {
        return $this->child->check($key, $value);
    }
}
