<?php

class Garaz
{

    public array $auta = array();

    public function zaparkuj($auto)
    {
        $this->auta[$auto->spz] = $auto;
    }

    public function vyparkuj($spz)
    {
        unset($this->auta[$spz]);
    }

    public function __toString(): string
    {
        $pocetAut = count($this->auta);
        $text = "V garáži je";
        if ($pocetAut < 1) {
            return "V garáži není žádné auto.";
        } elseif ($pocetAut == 1) {
            $auto = array_values($this->auta)[0];
            return $text . " auto s SPZ " . $auto->spz . " barvy " . $auto->barva . ".";
        } else {
            foreach ($this->auta as $auto) {
                $text = $text . ' auto s SPZ ' . $auto->spz . ' barvy ' . $auto->barva;
            }
            return $text . '.';
        }
    }
}