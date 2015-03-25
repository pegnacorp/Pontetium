<?php
include_once(dirname(__FILE__)."/../app/Model/User.php");
include_once(dirname(__FILE__)."/../app/View/UserList.php");
include_once(dirname(__FILE__)."/../app/View/UserForm.php");

	class UserController{
		public $action;

	function __construct(){
	}

		function listing(){
			$user = new User();
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
		function action($action){
				switch ($action){
					case "list":
							$this->listing();
							break;
					case "add":
							$this ->add();
							break;
					case "delete":
							$this->delete();
							break;
					case "modify":
							$this->modify();
							break;
				}

		}

	}
	$userController = new UserController();
	$actionRequest = $_GET["accion"];
	$userController->action($actionRequest);

?>