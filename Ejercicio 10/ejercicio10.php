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
                    echo "<form action='ver-imagen.php' METHOD='get'>
                             <input type='hidden' name='file' value='$file'>
                             <input type='submit' class='name-img-input' value='$file'>
                           </form>";
                }
            }
            closedir($handle);
        }
    } else {
        echo "Directory not found.";
    }
    echo "</div>";
?>

<form class="formulario-9" action="../Ejercicio%209/guardar-imagen.php" method="post" enctype="multipart/form-data">
    <div class="contenido-form-9">
        <input class="input-9" type="text" name="name" placeholder="Nombre">
        <input class="input-9" type="file" name="file">
        <input class="submit-9" type="submit" value="publicar">
    </div>
</form>

<?php
footer_index();
?>

</body>
</html>
