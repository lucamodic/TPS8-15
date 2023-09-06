<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <title>Guia de Prácticos</title>
</head>
<body>
    <?php

    include_once('../Enunciados y Resoluciones/header_index.php');
    header_index();
    echo "<div class='contenido-9'>";
        $directory = "../Imagenes";
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        if (is_dir($directory)) {
            if ($handle = opendir($directory)) {
                while (false !== ($file = readdir($handle))) {
                    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    if (in_array($extension, $allowedExtensions)) {
                        echo "<img class='image' src='$directory/$file' alt='$file' />" . PHP_EOL;
                        echo "<h3 class='name-img'>$file</h3>";
                    }
                }
                closedir($handle);
            }
        } else {
            echo "Directory not found.";
        }
    echo "</div>";
    ?>

    <form class="formulario-9" action="guardar-imagen.php" method="post" enctype="multipart/form-data">
        <div class="contenido-form-9">
            <input class="input-9" type="text" name="name" placeholder="Nombre">
            <input class="input-9" type="file" name="file">
            <input class="submit-9" type="submit" value="Publicar">
        </div>
    </form>

    <?php
    footer_index();
    ?>

</body>
</html>
