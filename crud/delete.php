<?php 

include "db.php";
$id=$_GET['id'];

 $delete = $db->exec('DELETE FROM kullanici_bilgileri WHERE id = '.$id.' ');
 if($delete)
 {
 	header("location:index.php");
 }
   
 ?>