<?php
$plodiny = [
    'ovoce' => ['malina', 'jahoda'],
    'zelenina' => ['meloun', 'limeta', 'brokolice']
];

if ($_POST) {
    $plodina = $_POST['plodina'];

    $nalezenaKategorie = null;
    foreach ($plodiny as $klicKategorie => $kategorie) {
        if (array_search($plodina, $kategorie)) {
            $nalezenaKategorie = $klicKategorie;
        }
    }
    if ($nalezenaKategorie == null) {
        echo 'Plodina není nikam zařazena.';
    } else {
        echo 'Plodina ' . $plodina . ' je ' . $nalezenaKategorie . '.';
    }
}

?>
<html>
<head>
    <link rel="stylesheet" href="./second/styles.css">
</head>
<body>
<div class="container">
    <form method="post" action="second.php">
        <label for="plodina">Zadej název plodiny</label>
        <input type="text" name="plodina" value="">
        <button type="submit">Rozpoznat</button>
    </form>
</div>
</body>
</html>
