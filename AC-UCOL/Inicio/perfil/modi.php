<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <?php
                    include ('conexion.php');

                    $id = $_REQUEST['id'];

                    $query = "SELECT * FROM inse1 WHERE id = '$id' ";
                    $resultado = $conexion -> query ($query);
                    $row = $resultado -> fetch_assoc();
                
                ?>


    <form action="promodi.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
    <input type="text" value = "<?php echo $row['id']; ?>">
    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" heigth="150" width="180" >
    <input type="file" name="Imagen" id="">
    <input type="submit" value="enviar">

    </form>
</body>
</html>
