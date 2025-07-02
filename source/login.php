<?php
session_start();
include 'config.php';
include 'DataBaseHandler.class.php';

$db = new DataBaseHandler($conn);



if(isset($_GET["mode"])){
	if($_GET["mode"] == "rest_check"){
		$response = ['valid' => false, 'message' => 'Invalid request'];
			
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $_REQUEST['usr_email'];
			$password = $_REQUEST['usr_password'];

			if($db->userLogin($email,$password)){
				$response = ['valid' => true];
			}else{
				$response['message'] = 'Ungültige E-Mail oder Passwort.';
			}
		}
			
			
		header('Content-Type: application/json');
		echo json_encode($response);
		exit();
	}
}else{
	//standard
	$response = ['status' => 'error', 'message' => 'Invalid request'];
	$email = $_REQUEST['usr_email'];
	$password = $_REQUEST['usr_password'];

	if($db->userLogin($email,$password)){
		header($mainURL);
	}else{
		echo "nok";
	}


}





?>
