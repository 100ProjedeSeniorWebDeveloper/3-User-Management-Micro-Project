
<?php
// connect the database server
$connection = new PDO("mysql:host=localhost;dbname=proje3;charset=utf8", "root", "");
session_start();
$message = null ;
if (isset($_SESSION['error'])) {
	$message = $_SESSION['error'];
	unset($_SESSION['error']);
}