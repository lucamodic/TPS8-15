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
    $palabra = $_POST['palabra'];
    $texto = $_POST['texto'];

    function buscarPalabra($palabra, $texto) {
        $palabra = strtolower($palabra);
        $texto = strtolower($texto);
        $total = 0;

        for ($i = 0; $i < strlen($texto); $i++) {
            for ($j = 0; $j < strlen($palabra); $j++) {
                if ($texto[$i + $j] != $palabra[$j]) {
                    break;
                }
                if ($j == strlen($palabra) - 1) {
                    $total++;
                }
            }
        }
        return $total;
    }


    echo "<div class='contenedor-15'><div class='total-15'> <h3 class='h15'> Total de ocurrencias: <br>" . buscarPalabra($palabra, $texto) . " </h3></div></div>";

    footer_index();
    ?>


</body>
</html>