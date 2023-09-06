<?php
    function guardar_imagen()
    {
        if ($_FILES["file"]["error"] > 0) {
            echo "Error: " . $_FILES["file"]["error"] . "<br />";
        } else {
            $fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $uploadDirectory = "../Imagenes/";
            $targetFilePath = $uploadDirectory . $_POST["name"] . "." . $fileExtension;

            if (file_exists($targetFilePath)) {
                echo $_FILES["file"]["name"] . " already exists.";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
                echo "Stored in: " . $targetFilePath;
            }
        }
        header("Location: ejercicio9.php");
    }

    guardar_imagen();
?>