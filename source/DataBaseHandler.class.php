<?php

class DataBaseHandler{
	
	private $conn = null;
	public $prefix = "xyz_"; //Datenbankpräfix - wird initial automatisch vergeben
	private $currentQuery = "";
	
	
	public function __construct($conn){
		$this->conn = $conn;
	}
	
	public function getConfig(){
		$query = "SELECT * FROM {$this->prefix}config";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		
		$ret = new stdClass();
		while( $row = $result->fetch_assoc()){
			$ret->{$row["config_name"]} = $row["config_value"];
		}
		
		$ret->themeURL = "themes/{$ret->theme}/";
		
		return $ret;
	}
	
	
	public function userLogin($name,$password){
		$query = "SELECT * FROM {$this->prefix}user WHERE email = ?";
		$stmt = $this->conn->prepare($query);
		$stmt->bind_param('s', $name);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_assoc();
		$stmt->close();

		//if ($user && password_verify($password, $user['password'])) {
			$_SESSION['user_id'] = $user['user_id'];
			$_SESSION['user_name'] = $user['first_name'];
			$_SESSION['user_email'] = $user['email'];
			return true;
		//}
		//return false;
	}
	
	public function getUser(){
		$query = "SELECT * FROM {$this->prefix}user WHERE user_id = ?";
		$stmt = $this->conn->prepare($query);
		$stmt->bind_param('s', $_SESSION['user_id']);
		$stmt->execute();
		$result = $stmt->get_result();
		
		$stmt->close();
		return $result->fetch_assoc();
	}
	
	public function prepare($sql){
		return $this->conn->prepare($sql);
	}
	
	public function query($query){
		$this->currentQuery = $query;
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		return $result;
	}
	
	public function execute($query, $params=[]){
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		return $result;
	}
	
	public function insert($table,$attrs){
		
		$columns = implode(',',array_keys($attrs));
		$placeholders = implode(',',array_fill(0,count($attrs),'?'));
		$valuetypes = implode('',array_fill(0,count($attrs),'s'));
		$values = array_values($attrs);
		$query = "INSERT INTO {$table} ($columns) VALUES ($placeholders)";
		$stmt = $this->conn->prepare($query);
		$stmt->bind_param($valuetypes,...$values);
		$stmt->execute();
		return $this->conn->insert_id;
	}
}

?>