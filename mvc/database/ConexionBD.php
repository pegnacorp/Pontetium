<?php
Class ConexionBD{
    public $conn = null;
    public $host = 'localhost';
    public $db =   'mvc';
    public $user = 'root';
    public $pwd =  '';

	function conectar (){
	    try {
	        $conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->pwd);
	    }
	    catch (PDOException $e) {
	        echo '<p>No se puede conectar a la base de datos !!</p>';
	        exit;
	    }
	    return $conn;
	 }
	 function desconectar(){

	 }
}
?>