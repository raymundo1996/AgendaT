<?php 
  $conexion = new mysqli("localhost", "root", "", "acucol");

  if($conexion)
  {
      echo "conexion";
  }else
  {
      echo "no conexion";
  }

?> 