<?php
    include("./conexbd.php");

    if(isset($_POST['btn-submit'])){
        $nameImage = $_FILES['imagen']['name'];
        $tmp = $_FILES['imagen']['tmp_name'];

        $file = "../public/images";
        $fileName = $_POST['name-image'];
        $ruta = $file . '/' . $nameImage;

        move_uploaded_file($tmp, $ruta);

        $query = "INSERT INTO imagenes (ruta, filename) VALUES ('$ruta', '$fileName')";
        $result = mysqli_query($conex, $query);
        
        if($result){
            // echo "funciona";
            header("Location: ../public/add.php");
        }else{
            echo "error"; 
        }
    }

?>