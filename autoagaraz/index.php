<html lang="cs-cz">
<head>
    <meta charset="utf-8">
    <title>Garaz</title>
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
<h1>Auto a garáž</h1>

<?php
$garaz = new Garaz();
$auto1 = new Auto("123ABC", "červená");
$auto2 = new Auto("456DEF", "modrá");
$garaz->zaparkuj($auto1);
$garaz->zaparkuj($auto2);
echo $garaz;
echo '<br>';
echo '<br>';
$garaz->vyparkuj("123ABC");
$garaz->vyparkuj("456DEF");
echo $garaz;
?>

</body>
</html>