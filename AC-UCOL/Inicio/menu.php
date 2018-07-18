<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AC-UCOL </title>


</head>
<body>
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
                <li><a href="sesion/index.html">Perfil</a></li>
                <li><a href="sesion/index.html">Configurar</a></li>
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


</body>
</html>