<?php

$products = [
    3500,
    2800,
    1280,
    1920,
    4320
];


$avg = array_sum($products) / count($products);
$difference = abs($products[2] - $avg);
echo "Třetí produkt se od průměrné ceny liší o " . $difference . " Kč.";

?>