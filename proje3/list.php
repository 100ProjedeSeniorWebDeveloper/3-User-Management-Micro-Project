<?php require_once "connection.php"; ?>
<meta charset="utf-8">
<!--list customer with customer's id-->
<!--came this page with customer's id -->
<h2>Customer List</h2>
<!-- we want all customer with foreach loop so we connection table in the database and use foreach loop  -->
<?php foreach( $connection->query("SELECT * FROM table1") as $customer ): ?>
	<a href="customer.php?id=<?=$customer['id']?>"><?=$customer['name']?> <?=$customer['surname']?></a> <br>
<?php endforeach;?>
<hr>
<a href="home.php">Back to Home</a>
