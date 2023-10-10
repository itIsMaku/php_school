<?php
$pole = [];
for ($i = 10; $i > 0; $i--) {
    $pole[] = $i;
}
?>
<html>
<head>

</head>
<body>
<ul>
    <?php
    foreach ($pole as $i) {
        echo '<li>' . $i . '</li>';
    }
    ?>
</ul>
</body>
</html>