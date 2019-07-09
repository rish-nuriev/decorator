<?php

namespace Decorator;

class Decorator implements ComponentInterface
{
    protected $component;

    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    public function calculate(): float
    {
        return $this->component->calculate();
    }
}
