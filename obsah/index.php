<html lang="cs-cz">
<head>
    <meta charset="utf-8">
    <title>Obsah</title>
</head>
<body>
<?php
mb_internal_encoding('UTF-8');

function AutoloadClasses($class)
{
    require 'tridy/' . $class . '.php';
}

spl_autoload_register('AutoloadClasses');
?>
<h1>Obsah</h1>

<?php
$velkejKruh = new Kruh(50);
$malyKruh = new Kruh(11);
$obdelnik = new Obdelnik(20, 5);
echo ($velkejKruh->obsah() - $malyKruh->obsah() - $malyKruh->obsah() - $obdelnik->obsah());
?>

</body>
</html>