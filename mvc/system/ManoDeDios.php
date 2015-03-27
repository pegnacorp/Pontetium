<?php
	class ManoDeDios{

		function darVida($nombreClase,$argumentos){
			$clase = new ReflectionClass($nombreClase);
			$objeto = $clase->newInstanceArgs($argumentos);
			return $objeto;
		}
	}
?>