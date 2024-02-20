<?php
$currentFolder = "U:\htdocs";
if (isset($_GET)) {
    if (isset($_GET['folder'])) {
        $currentFolder = $_GET['folder'];
    }
}
$folder = dir($currentFolder);

$filesNames = [];

while ($file = $folder->read()) {
    $filesNames[] = $file;
}
$folder->close();
unset($filesNames[0], $filesNames[1]);

?>

<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="main">
    <div class="header">
        <h1>Průzkumník souborů</h1>
    </div>
    <div class="explorer">
        <div class="header">
            <span>Aktuální adresář: <b><?php echo $currentFolder ?></b></span>
        </div>
        <div class="content">
            <?php

                $icons = array("txt", "png");

                foreach ($filesNames as $file) {
                    $icon = "icons/other.png";
                    foreach ($icons as $extension) {
                        if (str_ends_with($file, "." . $extension)) {
                            $icon ="icons/" . $extension . ".png";
                        }
                    }

                    $href = "index.php?folder=" . $currentFolder . '\\' . $file;
                    if (is_file($currentFolder . "\\" . $file)) {
                        $href = $currentFolder . "\\" . $file;
                    }

                     echo '<div class="file"><img src=\''. $icon . '\' width="16px" height="16px" alt="icon"/><a href=\'' . $href . '\'>' . $file . '</a></div>';
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>