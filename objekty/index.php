<h1>První objekt</h1>
<?php
require 'tridy/Clovek.php';

$clovek = new Clovek("Adam", "Volkman");
$clovek->pozdrav();

echo $clovek->getFirstname() . ' ' . $clovek->getLastname();
?>
