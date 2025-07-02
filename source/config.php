<?php
$debug = true;

if(isset($debug) && $debug == true){
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

$servername = "localhost"; // Ihr Servername
$username = "YourUserName"; // Ihr Datenbank-Benutzername
$password = "YourPassword"; // Ihr Datenbank-Passwort
$dbname = "YourDataBaseName"; // Ihr Datenbankname

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

mysqli_set_charset($conn, 'utf8');
global $conn;


?>
