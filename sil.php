<?php 
	include("baglan.php");

if(isset($_GET["id"]))
	$id=$_GET["id"];

	$musteri=$db->prepare("DELETE FROM kullanici_bilgileri where id=?");
		$musteri->execute(array($id));
		if($musteri){
			header("location:index.php");
		}
		else
		{
			echo"Silinemedi";

		}




	/*
	$gelenid=$_GET["id"];
	echo $gelenid;
	if($count=$db->exec("DELETE FROM kullanici_bilgileri WHERE id= ? ")){
		echo  $count. 'Kullanıcı silindi';
		header("location:index.php");
	}
	else {echo "silinemedi";}
 ?>