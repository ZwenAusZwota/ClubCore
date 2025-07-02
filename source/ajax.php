<?php
$debug = true;

session_start();
include 'config.php';
include 'functions.php';
include 'DataBaseHandler.class.php';
include_once('Widget.class.php');

$db = new DataBaseHandler($conn);

$response = ['status' => 'error', 'message' => 'Invalid request', 'valid' => false, 'request' => $_REQUEST];

if(!isset($_SESSION['user_id'])){
	if(isset($_GET["action"])){
		if($_GET["action"] == "login"){
			$response = ['valid' => false, 'message' => 'Invalid request'];
				
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$email = $_REQUEST['usr_email'];
				$password = $_REQUEST['usr_password'];

				if($db->userLogin($email,$password)){
					$response = ['valid' => true];
				}else{
					$response['message'] = 'Login fehlgeschlagen!';
				}
			}
				
			header('Content-Type: application/json');
			echo json_encode($response);
			exit();
		}
	}
	$response['message'] = "Invalid request 02";
	header('Content-Type: application/json');
	echo json_encode($response);
	exit();
}

if(isset($_REQUEST["plugin"])){
		
		include_once("PluginHandler.class.php");
		$pluginHandler = new PluginHandler();
		$response = $pluginHandler->handleAjax($_REQUEST["plugin"]);
		header('Content-Type: application/json');
		echo json_encode($response);
		exit();
	}

if(!isset($_GET["action"])){
	header('Content-Type: application/json');
	echo json_encode($response);
	exit();
}



//System -AJAX-Handling

$action = $_GET["action"];
switch($action){
	case "add_url":
		
	break;
	case "upload":
		
	break;
	case "new_gallery":
		
	break;
}


header('Content-Type: application/json');
echo json_encode($response);
exit();


?>

