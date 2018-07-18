<?php 

    include ('conexion.php');

    $id = $_REQUEST['id'];

    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $query = "UPDATE inse1 SET imagen = '$imagen' WHERE id = '$id' ";

    $resultado = $conexion -> query ($query);

    if ($resultado)
    {
        header('location: perfil.php');
    }else
    {
        echo "no se inserto";
    }

?>