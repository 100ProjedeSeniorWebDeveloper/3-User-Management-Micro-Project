<?php 
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proje3</title>
</head>
<body>
	<!--İnformation about customer post creat.php-->
	<form action="creat.php" method="post">
		<input type="text" name="name" placeholder="Name"><br>
		<input type="text" name="surname" placeholder="Surname"><br>
		<input type="email" name="email" placeholder="E-mail"><br>
		<input type="number" name="phonenum" placeholder="Phone Number"><br>
		<input type ="textarea" name="note" placeholder="Note"><br>
		<input type="submit" name="Add" value="Add"><br>
	</form>	
	<!--inputed key post search.php -->
	<form action="search.php" method="post" name="search">
		<input type="text"  name="search" placeholder="Customer's Name,Surname...">
		<input type="submit" value="search">
	</form>

	<a href="list.php">Customer List</a> <br>
</body>
</html>