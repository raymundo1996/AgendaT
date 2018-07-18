<?php
	session_start();
try {
    $conn=new mysqli("localhost","root","","acucol");
   	
   	$usuario=$_POST['username'];
   	$pass=$_POST['password'];
   	

   	$consulta=mysqli_query($conn,"SELECT * FROM inse1 WHERE Usuario='$usuario' AND Contrasena='$pass' LIMIT 1");
	$consultadatos= mysqli_fetch_assoc($consulta);

	if(mysqli_num_rows($consulta)>0){

		$_SESSION['usuario_nombre']=$consultadatos['Usuario'];
		
		echo "<script> location.href='/AC-UCOL/Inicio/index.php'; </script>";
	}else{
		echo "No encontrado";
	}
	

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
