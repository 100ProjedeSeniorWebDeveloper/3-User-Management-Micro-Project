<?php 

include "db.php";
$id=$_GET['id'];

 $delete = $db->prepare('DELETE FROM kullanici_bilgileri WHERE id = ? ');
$delete->execute(array($id));
 if($delete)
 {
 	header("location:index.php");
 }
   
 ?>