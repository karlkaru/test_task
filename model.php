<?php
class Model {
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $dbname="taskdatabase";


	function __construct(){
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if($this->conn->connect_error){
            echo 'connection failed!';
        } else {
            return $this->conn;
        }	
	}

    

}	

?>

