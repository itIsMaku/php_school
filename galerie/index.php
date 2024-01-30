<?php
mb_internal_encoding('UTF-8');

function AutoloadClasses($class)
{

    require 'tridy/' . $class . '.php';
}

spl_autoload_register("AutoloadClasses");

$galerie = new Galerie('images', 3);

if (isset($_POST) && isset($_FILES['image'])) {
    $upload = new Upload($_FILES['image']);
    $success = $upload->moveFile();

    if ($success) {
        $thumbnail = new ThumbImage('images/' . $upload->fileName);
        $thumbnail->createThumb('images/' . str_replace('.' . $upload->extension, '', $upload->fileName) . '_nahled.' . $upload->extension, 160);
    }
}
?>
<!DOCTYPE html>

<html lang="cs-cz">
<head>
    <meta charset="utf-8"/>
    <title>Galerie</title>
    <style>
        * {
            font-family: Arial, sans-serif
        }

        .upload-container {
            margin-top: 1rem;
        }

        .upload-form {
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            gap: 1rem;
        }
    </style>
</head>
<body>
<h1>Galerie</h1>
<?php
$galerie->nacti();

$galerie->vypis();
?>

<div class="upload-container">
    <form action="index.php" method="post" class="upload-form" enctype="multipart/form-data">
        <label for="image">Nahraj nový obrázek:</label>
        <div>
            <input type="file" name="image">
            <input type="submit"/>
        </div>
    </form>
</div>
</body>
</html>