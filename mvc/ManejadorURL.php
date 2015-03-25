
<?php
class ManejadorURL{
	public $url;
	public $controller;
	public $action;
	public $params;

	function procesarUrl(){
		$url = "miweb.com/index.php/user/new/?ejemplo=hola";
		//Código para obtener la url de la página
		//$url = $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		$array = parse_url($url);
		$elementosPath  = explode("index.php", $url);
		$elementosQuery = preg_split ("/[\/]+/", $elementosPath[1]);
		$controller = $elementosQuery[1];
		$action = $elementosQuery[2];
		parse_str($array['query'],$parametros); 
		echo "Controlador " .$controller;
		echo "</br>accion " . $action;

	}
	
	function getPeticion(){
		return $url;
	}
	function getControlador(){
		return $controller;
	}
	function getAccion(){
		return $action;
	}
	function getParametros(){
		return $params;
	}
}
	$manejadorURL = new ManejadorURL();
	$manejadorURL->procesarUrl();
?>