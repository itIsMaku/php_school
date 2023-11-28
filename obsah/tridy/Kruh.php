<?php

class Kruh
{

    public float $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function obsah(): float
    {
        return M_PI * pow($this->radius, 2);
    }

}