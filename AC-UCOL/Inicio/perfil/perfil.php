<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
    <link href="../css/style1.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">

    <script src="script.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../index.php">
                    <h1>AC-UCOL</h1>
                </a>
            </div>

            
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a >Inicio</a></li>
        <li><a href="#about">Centros de Computo</a></li>
		<li><a href="../solicitud/solicitud.php">Solicitud</a></li>
		<li><a href="#contact">Sugerencias</a></li>


        <?php if(isset($_SESSION['usuario_nombre']))
        {
            ?> 

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo($_SESSION['usuario_nombre']); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="perfil/perfil.php">Perfil</a></li>
                <li><a href="/AC-UCOL/Inicio/sesion/logout.php">Cerrar sesion</a></li>
              </ul>
            </li> 
        

        <?php
        }
        else
        { ?>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Iniciar sesion <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="sesion/index.html">Maestro</a></li>
                <li><a href="sesion/index.html">Adminitrador</a></li>
              </ul>
            </li>
       <?php } ?>

       
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br><br><br><br><br><br>



<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        
      <?php
                    include ('conexion.php');

                    //$id = $_REQUEST['id'];

                    $query = "SELECT * FROM inse1 WHERE id ";
                    $resultado = $conexion -> query ($query);
                    $row = $resultado -> fetch_assoc();
                
                ?>

        <?php
           // echo "<img src='uploads/$file_name' >";
        ?>

            <output id="list"></output>

    <form action="promodi.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data" >

    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" heigth="150" width="180" class="visible" >
            <br><br><br><br><br><br><br><br><br><br>
    <span class="btn btn-default btn-file"> 
    <input  type="file" name="Imagen" id="file" class="file glyphicon glyphicon-plus">
    </span>

    <style>
        .btn-file {
    top: 50px;
    overflow: hidden;
}
.btn-file input[type=file] {

     width: 4px;
     height: 20px;
    top: 50%;
    
   

    
    
    
}
    </style>

    <center>
    <button type="submit"  class="well color" style ="font-weight: 900;" > Cambiar foto </button>
    </center>

     

    </form>

    

      </div>
      
    </div>
    
  </div>
</div>

</div>


<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-12 user-details">
            <div class="user-image">
            <?php
                     $conexion = new mysqli("localhost", "root", "", "acucol");

                    $query = "SELECT * FROM inse1";
                    $resultado = $conexion -> query ($query);
                    while ($row = $resultado -> fetch_assoc()){
                
                ?>
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" class="img-thumbnail" width="150px" height="150px">
                <button  type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                
                <?php } ?>
            </div>
            
            <div class="user-info-block">
            <br><br><br><br>
                <div class="user-heading">
                    <h3>

                         <?php
                                $nombre = $_SESSION['usuario_nombre'];
                                $apellido_par = $_SESSION['usuario_apellido'];
                                $apellido_mar = $_SESSION['usuario_materno'];

                                        echo($nombre);
                                        echo(" ");
                                        echo($apellido_par);
                                        echo(" ");
                                        echo($apellido_mar);
?>
                    </h3>

                    <span class="help-block">
                
                    </span>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a data-toggle="tab" href="#information">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#email">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#events">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </a>
                    </li>
                </ul>


                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Account Information</h4>
                        </div>
                        <div id="settings" class="tab-pane">
                            <h4>Settings</h4>
                        </div>
                        <div id="email" class="tab-pane">
                            <h4>Send Message</h4>
                        </div>
                        <div id="events" class="tab-pane">
                            <h4>Events</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<br><br><br><br><br>
		
		
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Introduce Nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo Electronico</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Introduce Correo" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Tema</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Equipo de computo:</option>
                                <option value="service">Instalación</option>
                                <option value="suggestions">Equipo en mal estado</option>
                                <option value="product">Eficiencia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Enviar Mensaje</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Oficina Principal</h5>
				
				<address>
				  <strong>Universidad de Colima</strong><br>
				  Colonia las Viboras, AV. Universidad<br>
				  Colima, Col 28048<br>
				  <abbr title="Phone">Telefono:</abbr> 312 114 8351
				</address>

				<address>
				  <strong>Correo electronico</strong><br>
				  <a href="mailto:#">UDC@ucol.mx</a>
				</address>	
				<address>
				  <strong>Redes sociales</strong><br>
                       	<ul class="company-social">
                        <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2018,AC-UCOL. Derechos reservados</p>
                    
				</div>
			</div>	
		</div>
	</footer>

   
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>	
	<script src="../js/jquery.scrollTo.js"></script>
	<script src="../js/wow.min.js"></script>
   
    <script src="../js/custom.js"></script>

</body>

</html>
