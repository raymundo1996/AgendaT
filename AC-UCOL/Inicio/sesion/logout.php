<?php
	session_start();
	session_destroy();
	echo "<script> location.href='../sesion/index.html'; </script>";
?>