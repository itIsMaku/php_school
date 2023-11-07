<?php
require 'tridy/Clovek.php';

mb_internal_encoding('utf-8');

/*$osoba1 = new Clovek();
$osoba1->jmeno = "Karel";
$osoba1->prijmeni = "Klobása";
$osoba1->vek = 43;

echo $osoba1->pozdrav() . "<br>";
echo "Tato osoba je stará " . $osoba1->rekniVek() . " let. <br>";

$osoba2 = new Clovek();
$osoba2->jmeno = "Pepa";
$osoba2->prijmeni = "Zakokrhal";

echo $osoba2->pozdrav(). "<br>";
*/

$osoba3 = new Clovek("Petr", "Těšina", 44);
echo $osoba3->pozdrav();