<?php
	class Config{
		public $params;

		function loadConfig(){
			$arregloIni = parse_ini_file("configuracion.ini");
			print_r($arregloIni);
		}
	}
	$config = new Config();
	config->loadConfig();

?>