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

    <form class="form-12" action="guardar-visitante.php" METHOD="POST">
        <input class="input-nombre-12" type="text" name="nombre" placeholder="Ingrese nombre">
        <div class="planeta">
            <label class="label-planetas" for="planetas">Selecciona planeta de nacimiento:</label>
            <select name="planetas" id="planetas">
                <option value="Jupiter">Jupiter</option>
                <option value="Marte">Marte</option>
                <option value="Saturno">Saturno</option>
                <option value="Urano">Urano</option>
                <option value="Venus">Venus</option>
                <option value="Tierra">Tierra</option>
            </select>
        </div>

        <input class="input-submit-12" type="submit" value="Ingresar al planeta tierra">
    </form>

    <?php
    footer_index();
    ?>

</body>
</html>
