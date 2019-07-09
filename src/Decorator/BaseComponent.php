<?php

namespace Decorator;

class BaseComponent implements ComponentInterface
{
    public function calculate(): float
    {
        return 0;
    }
}
