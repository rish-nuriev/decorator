<?php

namespace Decorator;

class Product extends Decorator
{
    protected $price;

    public function calculate(): float
    {
        return $this->getPrice() + parent::calculate();
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
