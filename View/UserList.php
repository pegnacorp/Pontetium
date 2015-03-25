<?php
include_once(dirname(__FILE__)."/View.php");
class UserList extends View{
	function listUsers($users){
		$i = 0;
		$filas = $users;
		while(count($filas)> $i){
			$row = $filas[$i];
			$sql = explode(",", $row);
			$filas[$i] = $sql;
			$i++; 
			$firstName = $sql[0];
			$lastName = $sql[1];
			$user = $sql[2];
			$password = $sql[3];

			echo "Primer nombre: " . $firstName."</br>";
			echo "Apellido: ".$lastName."</br>";
			echo "Usuario: ".$user."</br>";
			echo "Contrasena: ".$password."</br>";
			echo "--------------------------------<br/>";

		}
		echo "<a href='../controller/UserController.php?accion=add'>Nuevo usuario</a>";
	}
}
?>