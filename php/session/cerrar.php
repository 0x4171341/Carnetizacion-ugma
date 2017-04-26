<?php 
   session_start();
   
	$_SESSION["nombre"] = "";

	$_SESSION = array();

	session_destroy();


	header("location: ../../index.php");

 ?>