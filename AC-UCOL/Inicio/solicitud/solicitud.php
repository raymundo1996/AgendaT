<?php 
    session_start();
    //$_SESSION["logueado"]=false;
    if (isset($_SESSION['usuario_nombre']))
    {
        //header("Location: http://localhost/AC-UCOL/Inicio/index.php");
    }else{
      header("Location: http://localhost/AC-UCOL/Inicio/sesion/index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AC-UCOL </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	  <link href="../css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="../css/style.css" rel="stylesheet">
	  <link href="../color/default.css" rel="stylesheet">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script> 
    <script src="../js/jquery.scrollTo.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/custom.js"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
     <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

     <script src="datos.js"></script>
	
   
</head>
<body>
<?php require '../menu.php'; ?>

<div class="row">
<div class="col-md-6">
<form id="formu" action="#" method="post" enctype="multipart/form-data">
	
	<div>
		<label for="Nombre">Centro de computo:</label>
     <select id="nombre" name="centrodecomputo" >
    <option value="Modulo 1">Modulo de brenda</option>
    <option value="Modulo 2">Modulo de software</option>
 </select>
</div>
    <div>
    	<label for="fecha">Fecha:</label>
    	<input type="date" id="mail">
    </div>
    <div>
    	<label for="hora">Hora:</label>
    	<input  type="time"   min="9:00" max="8:00" value="09:00" required  id="hora">
    </div>
    
    
     <div>
		<label for="Nombre">Carrera:</label>
     <select id="Nombre" name="centro de computo">
    <option value="Modulo 1">Ingenieria en Mecatrónica</option>
    <option value="Modulo 2">Ingenieria en en Sistemas Computacionale</option>
    <option value="Modulo 1">Ingenieria en Sistemas Electronicos y Telecomunicaciones</option>
    <option value="Modulo 2">Ingenieria en Mecanica Electricista</option>

         
 </select>
    
    </div>
    
    
    <div>
		<label for="Nombre">Materia:</label>
     <select id="Nombre" name="centro de computo">
    <option value="Modulo 1"></option>
    <option value="Modulo 2"></option>
    <option value="Modulo 1"></option>
    <option value="Modulo 2"></option>
    <option value="Modulo 2"></option>  
         
 </select>
    
    </div>
    
    
    <div>
        
      <label for="Nombre">Manual</label>  
      <input name="archivo" type="file" size="20">   
        
     </div>
    
    
  <div>
    	<label for="msg">Mensaje</label>
    	<textarea id="msg"></textarea>
    </div>
<button type="submit" id="submit" class="button">Enviar Solicitud</button>
</form>
</div>

 



</div>
 


<script type="text/javascript">
	

  if (window.innerWidth == '360' || window.innerWidth == '800')
  {
  	//document.body.style.background="red";
  	document.getElementById("formu").style.margin="12em  10em 40em";
  	document.getElementById("formu").style.width="500px";
  	document.getElementById("formu").style.paddgiing="1em";
  	document.getElementById("formu").style.border="1px solid red";
  	//document.getElementById("formu").style.border-radius="1em";
  	 // document.getElementById("xx").style.background="red";

  	document.getElementById("xx").style.width="300px";
  	document.getElementById("xx").style.marginTop="-60%";
  	document.getElementById("xx").style.marginLeft="18%";

  	document.write("hola mundo peludo " + screen.availWidth + "px");
  }

</script>


 
   
</body>
</html>