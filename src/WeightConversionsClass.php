<?php

declare(strict_types=1);

namespace Netsper\WeightConversions;

class WeightConversionsClass
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(
        protected float $kilograms
    ) {
    }

    public function toPound(): float
    {
        return $this->kilograms * 2.2046;
    }
}
