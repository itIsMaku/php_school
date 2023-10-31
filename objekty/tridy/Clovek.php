<?php

class Clovek
{

    public function __construct($firstname, $lastname) // co to má php za goofy constructory wtf
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    private string $firstname;
    private string $lastname;

    public function pozdrav(): void
    {
        echo 'Ahoj!' . '<br>';
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }


}