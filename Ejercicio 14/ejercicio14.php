
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
    ?>

    <div class="contenido-11">
        <form class="form-11" action="matriz.php" METHOD="POST">
            <input class="input-matriz" type="number" name="dimension" placeholder="Ingrese dimensión de la matriz">
            <input class="enviar-dados" type="submit">
        </form>
    </div>

    <?php
    footer_index();
    ?>

</body>
</html>
