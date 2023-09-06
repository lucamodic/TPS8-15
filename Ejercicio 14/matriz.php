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
        $dimension = $_POST['dimension'];

        function crear_matriz($dimension) {
            $matriz = array();

            for ($i = 0; $i < $dimension; $i++) {
                $fila = array();
                for ($j = 0; $j < $dimension; $j++) {
                    $fila[] = $i;
                }
                $matriz[] = $fila;
            }
        return $matriz;
        }

        echo "<div class='contenedor-14'>";

            function recorrer_matriz_a($dimension){
                $matriz = crear_matriz($dimension);
                $diagonal = array();
                for($i = 0; $i < $dimension; $i++){
                    $diagonal[] = $matriz[$i][$i];
                }
                return $diagonal;
            }
            echo"<div class='matrix'> <h3> Diagonal principal: </h3>" .  implode(', ', recorrer_matriz_a($dimension)). "</div>";

            function recorrer_matriz_b($dimension){
                $matriz = crear_matriz($dimension);
                $diagonal = array();
                $iterador = $dimension-1;
                for($i = 0; $i < $dimension; $i++){
                    $diagonal[] = $matriz[$iterador-$i][$i];
                }
                return $diagonal;
            }
            echo"<div class='matrix'> <h3> Diagonal secundaria: </h3>" . implode(', ', recorrer_matriz_b($dimension)). "</div>";

            function recorrer_matriz_c($dimension){
                $total = 0;
                $matriz = crear_matriz($dimension);
                for($i = 0; $i < $dimension; $i++){
                    for($j = 0; $j < $dimension; $j++){
                        $total += $matriz[$i][$j];
                    };
                }
                return $total;
            }
            echo"<div class='matrix'> <h3> Suma de todos los valores: </h3>" . recorrer_matriz_c($dimension) . "</div>";
        echo "</div>";

    footer_index();
    ?>

</body>
</html>
