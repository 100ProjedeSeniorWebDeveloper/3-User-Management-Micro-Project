<?php 
require_once "connection.php";
// equal got id from list.php or search.php to variable
$id = (int)$_GET['id'];
//firstly, connect database
//secondly,query table in the database with id
//finally,fetch the table
$customer = $connection->query("SELECT * FROM table1 WHERE id = $id")->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>customer</title>
</head>
<body>
	<h1><?=$customer['name']?> <?=$customer['surname']?></h1>
	Customer's email: <?=$customer['email']?><br>
	Customer's Phone Number: <?=$customer['phonenum']?><br>
	Note About Customer: <?=$customer['note']?><br>
	<hr>
	<!-- get id with get method then go to update.php with id-->
	<form action="update.php?id=<?=$customer['id']?>" method="get">
		<input type="hidden" name="id" value="<?=$customer['id']?>">
		<button type="submit">Update</button>
	</form>
	<br>
	<!--this time,get id with post method then go to delete.php with id 
	ask to us for use delete operation on this form -->
	<form method="post" action="delete.php" onsubmit="return confirm('This customer will deleted.Are you sure?')">
		<input type="hidden" name="idToDelete" value="<?=$customer['id']?>">
		<button type="submit">Delete</button>
	</form>
	<hr>
	<a href="list.php">Back to list</a>
</body>
</html>