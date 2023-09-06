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

        $extraterrestres = 0;

        $nuevo_visitante = array(
            "nombre" => $_POST['nombre'],
            "planeta" => $_POST['planetas']
         );

        if(filesize("data-ejercicio12.json") == 0){
            $primero = array($nuevo_visitante);
            $data_a_guardar = $primero;
        }
        else {
            $viejos_visitantes = json_decode(file_get_contents("data-ejercicio12.json"));
            array_push($viejos_visitantes, $nuevo_visitante);
            $data_a_guardar = $viejos_visitantes;
        }

        if(!file_put_contents("data-ejercicio12.json", json_encode($data_a_guardar, JSON_PRETTY_PRINT), LOCK_EX)){
            $error = "Algo pasó";
        }else{
            $exito = "Se guardó";
        }
        $visitantes = json_decode(file_get_contents("data-ejercicio12.json"), true);
        echo "<div class='contenedor-12'> 
                
                    <div class='visitantes'>
                    <h4>Nombre</h4>";
                    foreach($visitantes as $visitante){
                        echo "<h5 class='dato'>".$visitante['nombre']."</h5>";
                    }
            echo"   </div>
                    <div class='visitantes'>
                    <h4>Planetas</h4>";
                    foreach($visitantes as $visitante){
                        echo "<h5 class='dato'>".$visitante['planeta']."</h5>";
                        if($visitante['planeta']  != "Tierra"){
                            $extraterrestres++;
                        }
                    }
        echo "    </div>
                </div>";

        echo "<div class='cont-ext'><h2 class='extraterrestres'> Cantidad de visitas extraterrestres: $extraterrestres </h2> </div>";

    footer_index();

    ?>

</body>
</html>
