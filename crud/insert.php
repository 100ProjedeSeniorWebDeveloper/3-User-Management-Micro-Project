<?php 

include "db.php";


if(isset($_POST["ad"]))
	{
		$ad=$_POST["ad"];
		$soyad=$_POST["soyad"];
		$cep=$_POST["cep"];
		$email=$_POST["email"];
		$ek=$_POST["ek"];

		if($ad!='' && $soyad!=''){
$query = $db->prepare('INSERT INTO kullanici_bilgileri (ad, soyad, email, cep, ek) values( ?, ?, ?, ?, ?)');
$query->execute(array($ad, $soyad, $email, $cep, $ek));

		}
	}

 ?>