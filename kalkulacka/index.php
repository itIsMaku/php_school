<?php
require 'classes/Calculator.php';

mb_internal_encoding(
    "utf-8"
);

$sum = '?';
if ($_POST) {
    $action = $_POST['action'];
    $first = $_POST['first'];
    $second = $_POST['second'];
    $calculator = new Calculator($first, $second);
    $sum = $calculator->{$action}();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="number" name="first" value="<?php echo $first ?>">
        <input type="number" name="second" value="<?php echo $second ?>">
        <select name="action">
            <option value="secti">Secti (+)</option>
            <option value="odecti">Odecti (-)</option>
            <option value="vynasob">Vynasob (*)</option>
            <option value="vydel">Vydel (/)</option>
        </select>
        <button type="submit">Vypočítat</button>
    </form>
    <?php echo 'Výsledek: ' . $sum ?>
</body>
</html>