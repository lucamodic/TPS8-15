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
        $menu = parse_ini_file("menu.ini");
        echo "<form class='form-13' action='ver-menu.php' METHOD='POST'>";
        foreach($menu as $comida => $item){
            echo "<div class='div-input-13'><input class='input-13' type='checkbox' name='menu[]' value='$comida'>$item </div>";
        }
        echo "<input class='submit-13' type='submit' value='enviar'>
             </form>";
    ?>

    <?php
    footer_index();
    ?>

</body>
</html>
