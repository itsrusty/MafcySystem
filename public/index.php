<!DOCTYPE html>
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
    <!-- icons -->
    <script src="https://kit.fontawesome.com/0f2756a855.js" crossorigin="anonymous"></script>
    <!-- ligthbox -->
    <title>Marcia Servin</title>
</head>
<body>
        <nav class="navigator">
            <ul class="list-items">
                <button class="darkmode">Tema <i class="fa-solid fa-moon"></i></button>
                <a href="./login.php" class="sesion">Sesión</a>
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
                <img src="<?php echo $fila['ruta'];?>" alt="">
            </div>
            <!-- close keys -->
            <?php
                }
            ?>
        </div>  

        <footer class="footer">
            <span class="copy">Mafcy, Copyright © 2022 </span>
        </footer>

    <!-- scripts -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="../model/app.js"></script>
</body>
</html>