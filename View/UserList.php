<?php
include_once(dirname(__FILE__)."/View.php");
class UserList extends View{
	function listUsers($users){
		$i = 0;
		while(count($users)> $i){
			$usuarioActual = $users[$i];
			echo "Primer nombre: " . $usuarioActual->firstName."</br>";
			echo "Apellido: ".$usuarioActual->lastName."</br>";
			echo "Usuario: ".$usuarioActual->user."</br>";
			echo "Contrasena: ".$usuarioActual->password."</br>";
			echo "--------------------------------<br/>";
			$i++;


		}
		echo "<a href='../controller/UserController.php?accion=add'>Nuevo usuario</a>";
	}
}
?>