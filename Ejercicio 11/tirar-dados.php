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
        $numero = $_POST['numero'];
        $resultado = 0;
        echo "<div class='dados'>";
        if($numero > 0){
            for($i = 0; $i < $numero; $i++){
                $random = rand(1, 6);
                $resultado += $random;


                 echo "<img class='dado' src='../Imagenes/dados/dado$random.png'>";
                 if($i + 1 < $numero ){
                     echo "<p class='mas'> + </p>";
                 }


            }
        }
        echo "</div>";
        echo "<h3 class='resultado-dados'>Resultado obtenido: " . $resultado . "</h3>";

    footer_index();
    ?>


</body>
</html>
