<!-- validar sesión -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!-- icon  -->
    <link rel="shortcut icon" href="./images/the_hare_by_markusolsonart_dez7pae.png" type="image/x-icon">
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <title>Marcia Servin</title>
</head>
<body>
        <nav class="navigator">
            <ul class="list-items">
                <button class="darkmode">Tema <i class="fa-solid fa-moon"></i></button>
                <a href="./upload.process.php" class="sesion">Subir</a>
                <a href="../controller/delete.php" class="sesion">Borrar</a>
            </ul>
        </nav>

        <!-- content -->
        <div class="content">
            <h1 id="title" class="bigtext">Marcia Servin<br><span class="small">Artista y tatuadora</span></h1> 
        </div>  

        <!-- php content-->
        <div class="container">
            <?php   
                 include("../controller/conexbd.php");    
                $query = "SELECT * FROM imagenes";
                $result = mysqli_query($conex, $query);

                while ($fila = mysqli_fetch_array($result)) {
            ?>
            <div class="tech-box">
                <img id="image" src="<?php echo $fila['ruta'];?>" alt="">
            </div>
            <?php
                }
            ?>
        </div>  


    <!-- scripts -->
         <!-- <script src="../model/app.js"></script> -->
    <!-- <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script> -->
    <!-- <script src="../lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js"></script> -->
</body>
</html>