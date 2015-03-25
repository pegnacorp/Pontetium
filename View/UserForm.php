<?php
include_once(dirname(__FILE__)."/View.php");
class UserForm extends View{
	function viewForm(){
?>
		<form action="../controller/UserController.php?accion=add"  method="post">
			<input type = "text" id="nombre" class = "input" name ="nombre" placeholder="nombre">
			<br>
			<input type = "text" id="apellido" class = "input" name ="apellido" placeholder="apellido">
			<br>
			<input type = "text" id="nombreUsuario" class = "input" name ="nombreUsuario" placeholder="nombre de usuario">
			<br>
			<input type = "password" id="clave" class = "input" name ="clave" placeholder="Contraseña">
			<input type = "submit" value="ingresar" >
		</form>
<?php

	
	}
}
?>
