<?php         
     include ('conexion.php');
    
     $id = $_REQUEST['id'];
     $modulo = $_POST['']


    $query = "SELECT * FROM inse1 WHERE id = '$id' ";
    $resultado = $conexion -> query ($query);
    $row = $resultado -> fetch_assoc();
                
?>