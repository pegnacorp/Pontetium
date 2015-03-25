<?php
include_once(dirname(__FILE__)."/../mvc/system/Config.php");
include_once(dirname(__FILE__)."/../mvc/system/Autoloader.php");
include_once(dirname(__FILE__)."/../mvc/system/ManejadorUrl.php");


	class WebApplication(){
		public $config;
		public $manejadorUrl;
		public $user;
		public $db;
		public $controller;
		public $autoload;

		function __construct(){
			$config = new Config();
			$manejadorUrl = new ManejadorUrl();
			$autoload  = new Autoloader();
		}

		function start(){

		}
	}
?>