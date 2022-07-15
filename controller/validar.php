<?php
    include("./conexbd.php");

    if(isset($_POST['submit'])){
          // bd
    // validar
    $user = $_POST['username'];
    $password = $_POST['password'];

    // sesion
    session_start();
    $_SESSION['user'] = $user;

    $query = "SELECT * FROM content WHERE nameuser = '$user' and password='$password'";
    $result = mysqli_query($conex,$query);
   
    // si los datos ingesados son iguales a los de la bd
    $filas = mysqli_num_rows($result);
    if($filas){
         header("Location:../public/add.php");
    }else{
        echo "No tienes permiso para acceder";
    }

    mysqli_free_result($result);
    mysqli_close($conex);
    }

?>