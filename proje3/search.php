<?php 
//connection database
require_once "connection.php";
//control that is post empty? 
if(!empty($_POST["search"])) {
	$key = $_POST["search"];
	//equal data with post method to variable 
	//key variable search database
	$search=$connection->prepare(" SELECT * FROM  table1 WHERE name LIKE ? OR surname LIKE ? OR email LIKE ? OR phonenum LIKE ? OR note LIKE ?");
	$search->execute(array('%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%','%'.$key.'%'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search</title>
</head>
<body>
	<form action="" method="post" name="search">
		<input type="text"  name="search" placeholder="Customer's Name,Surname...">
		<input type="submit" value="search"> 
	</form><br>
	<!--if search is emtyp ,then we want least one letter from user-->
	<?php if (empty($key)) echo "Please,enter least one letter to search"; 
	else{ ?> <!--if search isn't empty,display customers or customer -->
		<?php foreach ($search as $data): ?>
		<form>
			<h2><a href="customer.php?id=<?=$data['id']?>"><?=$data['name']?> <?=$data['surname']?></a></h2>
			Customer's email: <?=$data['email']?><br>
			Customer's Phone Number: <?=$data['phonenum']?><br>
			Note About Customer: <?=$data['note']?><br>
		</form>
	<?php endforeach; ?>
	<?php } ?>
	<hr>
	<a href="home.php">Back to home</a>
</body>
</html>