<?php
mb_internal_encoding('UTF-8');

function zkratTextNaPocetZnaku($text, $textLength): string
{
    $trimmedText = substr($text, 0, $textLength);
    if (strlen($text) > strlen($trimmedText)) {
        $trimmedText = substr($trimmedText, 0, -3) . '...';
    }
    return $trimmedText;
}

echo zkratTextNaPocetZnaku('Černé díry jsou tam, kde bůh dělil nulou', 19);

echo '<br>';

$translatedMonths = [
    'June' => 'června',
    'July' => 'července',
    'August' => 'srpna'
];

function datumCesky($base): string
{
    global $translatedMonths;
    $convertedData = date_create_from_format('Y-m-d', $base)->format('d. F Y');
    foreach ($translatedMonths as $month => $translatedMonth) {
        $convertedData = str_replace($month, $translatedMonth, $convertedData);
    }
    return $convertedData;
}

echo datumCesky('2016-07-25');

echo '<br>';

function sectiTriNejvetsiPrvkyPole($pole)
{
    rsort($pole);
    return $pole[0] + $pole[1] + $pole[2];

}

echo sectiTriNejvetsiPrvkyPole([
    15, 8, 12, 16, 4, 1, 5, 14
]);

?>