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
        $directory = "../Imagenes/";
        $name = $_GET['file'];

        echo "<img class='image' src='$directory/$name' alt='$name' />" . PHP_EOL;
        echo "<h3 class='name-img'>$name</h3>";
    echo "</div>";

?>
<?php
footer_index();
?>

</body>
</html>
