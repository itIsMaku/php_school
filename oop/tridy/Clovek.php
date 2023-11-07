<?php

class Clovek
{

    public string $jmeno;
    public string $prijmeni;
    public int $vek;

    public function __construct($jmeno, $prijmeni, $vek)
    {
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->vek = $vek;
    }

    public function pozdrav(): string
    {
        return "Ahoj " . " " . $this->jmeno . " " . $this->prijmeni . "!";
    }

    public function rekniVek(): int
    {
        return $this->vek;
    }

}