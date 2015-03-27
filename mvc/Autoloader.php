<?php
//include_once(dirname(__FILE__)."/../Model/User.php");
	class Autoloader{
		public $DIRECTORIO = '/../Controller/';
		function autocargar($nombreClase){
			//include $this->DIRECTORIO . $nombreClase . '.php';
			include(dirname(__FILE__).$this->DIRECTORIO . $nombreClase . '.php');
			//echo $this->DIRECTORIO . $nombreClase . '.php';

		}
	}
	$autocarga = new Autoloader();
	$autocarga->autocargar('UserController');

?>
