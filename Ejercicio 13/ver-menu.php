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
        $comidas = $_POST['menu'];


        foreach($comidas as $comida){
            if($comida == "plato_principal"){
                $comida = explode('_', $comida);
                $comida = implode(' ', $comida);
            }
            $comida = ucfirst($comida);
            echo "<div class='exterior-13'> <div class='contenedor-13'> <h1 class='flex-13'>$comida</h1> </div> </div>";
        }

    footer_index();
    ?>

</body>
</html>