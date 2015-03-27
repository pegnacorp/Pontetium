<?php
	class Controller{
		protected $accessControl;

		function __construct($action){
			$this->runAction($action);
		}

		function runAction($action){
				switch ($action){
					case "listing":
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
		function redirect($url){

		}
	}
?>