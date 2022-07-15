<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../public/css/delete.css">
    <!-- icon  -->
    <link rel="shortcut icon" href="../public/images/the_hare_by_markusolsonart_dez7pae.png" type="image/x-icon">
    <title>Mafcy - Eliminar</title>
</head>
<body>
    <div class="table">
        <table>
            <tr>
                <th>Nombre archivo</th>
                <th>Ruta archivo</th>
            </tr>
            <!-- php code -->
            <?php 
                include("./conexbd.php");

                // query
                $query = "SELECT * FROM imagenes";
                $result = mysqli_query($conex, $query);
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['filename']; ?></td>
                <td><?php echo $row['ruta']; ?></td>
                <td>
                    <form method="POST" action="./delete.php" id="form<?php echo $row['id'];?>">
                      <input type="hidden" value="<?php echo $row['id']; ?>" name="eliminar">
                      <input type="submit" value="Eliminar" name="delete" id="delete-button">
                    </form>
                </td>
            </tr>
            <!-- close key -->
            <?php } ?>

            <!-- DELETE -->
            <?php 
                if(isset($_POST['delete'])){
                    $id = $_POST['eliminar'];

                    $sql = "DELETE FROM imagenes WHERE id= $id";
                    if($conex -> query($sql) === true){
                        header("location: ./delete.php");
                        // header("Location: ../public/index.php");
                    }else{
                        die("errno" . $conex->error);
                    }
                }
            ?> 
        </table>
        <a href="../public/add.php">Volver</a>
    </div>

    <script src="../model/app.js"></script>
</body>
</html>