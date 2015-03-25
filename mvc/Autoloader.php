<?php
	class Aultoloader{
		function __autocargar($nombreClase){
			include $nombreClase . '.php';
		}
	}
	$autocarga = new Aultoloader();
	$autocarga->__autocargar("config");
?>
