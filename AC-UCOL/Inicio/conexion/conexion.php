<?php
	session_start();
try {
    $conn=new mysqli("localhost","root","","acucol");
   	
   	$usuario=$_POST['username'];
	$pass=$_POST['password'];
	//$Nombre = $_POST['nombre']; 
   	

   	$consulta=mysqli_query($conn,"SELECT * FROM inse1 WHERE Usuario='$usuario' AND Contrasena='$pass' LIMIT 1");
	$consultadatos= mysqli_fetch_assoc($consulta);

	if(mysqli_num_rows($consulta)>0){

		$_SESSION['usuario_id']=$consultadatos['id'];
		$_SESSION['usuario_nombre']=$consultadatos['Nombre'];
		$_SESSION['usuario_apellido']=$consultadatos['Apellido_paterno'];
		$_SESSION['usuario_materno']=$consultadatos['Apellido_materno'];
		$_SESSION['usuario_cuenta']=$consultadatos['Usuario'];
		$_SESSION['usuario_email']=$consultadatos['Email'];
		$_SESSION['usuario_foto']=$consultadatos['imagen'];
		
		
		echo "<script> location.href='../index.php'; </script>";
	}else{
		echo "No encontrado";
	}
	

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
