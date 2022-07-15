<!-- validar sesión -->
<?php
    session_start();
    error_reporting(0);

    $varsession = $_SESSION['user'];
    if($varsession  == null || $varsession= ''){
        // error message
        echo "No tienes permisos para acceder, primero inicia sesión";
        // redireccionar
        echo "<br><br> <a href='./login.php'>Iniciar sesión</a>";

        // close sesion
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="./css/upload.process.css">
    <link rel="shortcut icon" href="./images/the_hare_by_markusolsonart_dez7pae.png" type="image/x-icon">
    <title>Subir contenido</title>
</head>
<body>
    <form action="../controller/upload.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="text" name="name-image" id="" placeholder="Nombre de la imagen" required>
        <input type="file" name="imagen" id="">
        <input type="submit" class="btn" value="Subir imagen a Mafcy" name="btn-submit">
    </form>
</body>
</html>

