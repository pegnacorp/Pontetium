<?php
//include("mvc/ManejadorURL.php");
include("Model/User.php");
//include("Controller/UserController.php");
//include("mvc/system/ManoDeDios.php");
include("mvc/system/WebApplication.php");
	
	/*$manejadorURL = new ManejadorURL();
	$controlador = $manejadorURL->getControlador();
	$accion = $manejadorURL->getAccion();
	echo $accion;*/

	$manoDeDios = new ManoDeDios();
	//$usuario = $manoDeDios->darVida("User",$argumentos);
	//$dar = "getList";
	//echo $usuario->user;

	/*$userController = new UserController();
	$userController->$accion();*/

$webApplication = new WebApplication();
$webApplication->start();
?> 