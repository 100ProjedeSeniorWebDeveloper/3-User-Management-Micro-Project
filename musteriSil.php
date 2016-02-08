<?php 
include("musteriAyar.php");
$id=@$_GET["id"];
$sil=mysql_query("DELETE FROM musteri WHERE id='$id'");
if($sil){
	include("musteriListele.php");
}else{
	echo 'silme islemi basarisiz<br/>'.mysql_error();
}
?>
