<?php
//connection database
require_once "connection.php";
// firstly, equal got id from list.php or search.php to variable 
//secondly,connection database then query customer which equal id then after  fetch customer 
$id = (int)$_GET['id'];
$customer = $connection->query("SELECT * FROM table1 WHERE id = $id")->fetch();
if(!$customer) header("Location: list.php");
if($_POST){
	//came information with post method this page 
	//equal data with post method to variable
	$name     = $_POST['name'];
	$surname  = $_POST['surname'];
	$email    = $_POST['email'];
	$phonenum = $_POST['phonenum'];
	$note     = $_POST['note'];
	// in here, prepare customer's informations for update
	//then execute update
	$updateQuery = $connection->prepare("UPDATE table1 SET name = ? , surname = ? , email = ? , phonenum = ? , note = ? WHERE id = ? ");
	$isUpdated = $updateQuery->execute(array($name,$surname,$email,$phonenum,$note,$id));
	if($isUpdated){
		header("Location: customer.php?id=".$id);
	}else{
		//if it didn't update informations , it make error message
		$error = "Didn't Update";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
	<? if(isset($error)): ?>
	<?=$error?>
	<hr>
<? endif; ?>
<form method="post">
	<input type="text" name="name" placeholder="Customer's name" value="<?=$customer['name']?>"><br>
	<input type="text" name="surname" placeholder="Customer's surname" value="<?=$customer['surname']?>"><br>
	<input type="email" name="email" placeholder="Customer's email" value="<?=$customer['email']?>"><br>
	<input type="text" name="phonenum" placeholder="Customer's phone number" value="<?=$customer['phonenum']?>"><br>
	<input type="text" name="note" placeholder="Note about customer" value="<?=$customer['note']?>"><br>
	<br>
	<button type="submit">Update</button>
</form>
</body>
</html>