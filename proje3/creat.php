<?php 
//connection database
require_once "connection.php";

if($_POST['name'] && $_POST['surname'] && $_POST['email'] && $_POST['phonenum'] && $_POST['note']){
	//equal posted datas to variables 
	$name     = $_POST['name'];
	$surname  = $_POST['surname'];
	$phonenum = $_POST['phonenum'];
	$email    = $_POST['email'];
	$note     = $_POST['note'];
		// in addQuery variable, preparing this variables for database 
	$addQuery = $connection->prepare("INSERT INTO table1 (name, surname, phonenum, email, note) VALUES (?, ?, ?, ?, ?)");
		//and add database
	$isAdded = $addQuery->execute(array($name, $surname, $phonenum, $email, $note));
	if($isAdded){
		header("Location: home.php");
	}
}