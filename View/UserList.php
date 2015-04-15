<?php
include_once(dirname(__FILE__)."/View.php");
class UserList extends View{
	function listUsers($users){
		$i = 0;
		while(count($users)> $i){
			$usuarioActual = $users[$i];
			$manejadorUrl = new ManejadorUrl();
			/*$parametros = $manejadorUrl->getParametros();
			echo $parametros["id"];*/
			$id = $usuarioActual->id;
			echo "Nombre: " . $usuarioActual->firstName."</br>";
			echo "Apellido: ".$usuarioActual->lastName."</br>";
			echo "Usuario: ".$usuarioActual->user."</br>";
			echo "Contrasena: ".$usuarioActual->password."</br>";
			echo "<a href='../modify/?id=".$id."'>Modificar usuario</a>";
			echo " <a href='../delete/?id=".$id."'>Eliminar usuario</a><br>";
			echo "--------------------------------<br/>";
			$i++;
		}
		echo "<a href='../add/?d'>Nuevo usuario</a>";
	}
}
?>