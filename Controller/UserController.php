<?php
include_once(dirname(__FILE__)."/../Model/User.php");
include_once(dirname(__FILE__)."/../View/UserList.php");
include_once(dirname(__FILE__)."/../View/UserForm.php");
include_once(dirname(__FILE__)."/../mvc/system/Controller.php");


	class UserController extends Controller{
		public $action;

		function listing(){
			$user = new User("","","","");
			$users = $user->getList();
			$userList = new UserList();
			$userList-> listUsers($users);
		}
		function add(){
		
			if(empty($_POST["nombre"])){
				$userForm = new UserForm();
				$userForm->viewForm();
			}else{
				$nombre=$_POST["nombre"];
				$apellido = $_POST["apellido"];
				$nombreUsuario= $_POST["nombreUsuario"];
				$clave = $_POST["clave"];
				$user = new User();
				$user->add($nombre,$apellido,$nombreUsuario,$clave);
				header ("Location: UserController.php?accion=list");
			}
		}
		function delete(){

		}
		function modify(){

		}
		//No funciona actualmente
		function darReglasDeAcceso(){
			$reglas  = array();
			$regla1  = "admin,listing,add,delete,modify";
			array_push($reglas, $regla1);
			return $reglas;
		}


	}
	/*userController = new UserController();
	$actionRequest = $_GET["accion"];
	$userController->action($actionRequest);*/

?>