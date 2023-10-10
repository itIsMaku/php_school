<?php

$title = function() {
    return "Test";
}

?>
<style>

    body {
        font-family: Consolas, monaco, monospace; 
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>

<div class="container">
    <h1>
        <?php echo $title() ?>
    </h1>
</div>
