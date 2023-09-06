
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

    <form class="form-15" action="ver-ocurrencias.php" METHOD="POST">

        <input class="texto-15" type="text" name="palabra" placeholder="Ingrese palabra a buscar">
        <textarea class="area-15" name="texto" placeholder="Ingrese texto a buscar"></textarea>
        <input class="submit-15" type="submit" value="Ver resultado">
    </form>

    <?php
    footer_index();
    ?>
</body>
</html>
