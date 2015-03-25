<?php
include_once(dirname(__FILE__)."/../mvc/database/ConexionBD.php");
class User{
	public $firstName;
	public $lastName;
	public $user;
	public $password;

	function __construct($firstName,$lastName,$user,$password){
		$this->firstName =$firstName;
		$this->lastName = $lastName;
		$this->user = $user;
		$this->password = $password;
	}

	function add($firstName,$lastName,$user,$password){
		$conexionBD = new ConexionBD();
		$conn = $conexionBD->conectar();
		$result;
	    $sql = 'INSERT into user(firstName,lastName,user,password)';
	    $sql .='values( ';
	    $sql .=':firstName,:lastName,:user,:password)';
	    $result = $conn->prepare($sql);           
	    $params = array("firstName" =>$firstName, "lastName" => $lastName, "user" => $user, "password" => $password); 
	    $result->execute($params);    
	}
	function delete($id){
		$conexionBD = new ConexionBD();
		$conn = $conexionBD->conectar();
		$result;
	    $sql = 'DELETE FROM user WHERE idUser = ?';
	    $result = $conn->prepare($sql);           
	    $params = array($id); 
	    $result->execute($params);
	}
	function modify($id,$firstName,$lastName,$user, $password){
		$conexionBD = new ConexionBD();
		$conn = $conexionBD->conectar();
		$result;
	    $sql = 'UPDATE user SET firstName =?,lastName=?,user =?,password=? WHERE idUser=?';
	    $result = $conn->prepare($sql);           
	    $params = array($firstName,$lastName,$user, $password,$id); 
	    $result->execute($params);
	}
	function getList(){
		$conexionBD = new ConexionBD();
		$conn = $conexionBD->conectar();
		$result;
	    $sql = 'SELECT * FROM user';
	    $result = $conn->query($sql);         
	    $rows = $result->fetchAll();
	    $users = array();
	    foreach ($rows as $row) {
		    $firstName = $row['firstName'];
		    $lastName= $row['lastName'];
		    $user= $row['user'];
		    $password= $row['password'];
		    $user = new User($firstName,$lastName,$user,$password);
		    array_push($users, $user);
		}
		return $users;
	}
}
$user = new User("Juan","Pena","juan","1234");
$user ->delete(2);
?>