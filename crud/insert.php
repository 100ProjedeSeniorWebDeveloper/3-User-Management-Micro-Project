<!DOCTYPE html>
<html>
<head>
	<title>Yeni Müşteri Ekle</title>
	<meta charset="utf-8">
</head>
<body>
<div >
	<form action="" method="post">
	<h2>Müsteri Ekle</h2>
		<table>
			<tr>
				<td>Ad:</td>
				<td><input type="text" name="ad"></td>
				<td>Soyad:</td>
				<td><input type="text" name="soyad"></td>
			</tr>
			<tr>
				<td>Tel No:</td>
				<td><input type="text" name="cep"></td>
				<td>E-mail:</td>
				<td><input type="text" name="email"></td>
				
			</tr>
			<tr>
				<td>Not :</td>
				<td><textarea name="ek" cols="40" rows="8"></textarea></td>
			</tr>
			<tr>
							<td></td>
				<td><input type="submit" value="Kayıt Ekle"></td>	
			</tr>
		</table>
	</form>
</div>
</body>
</html>


<?php 

include "db.php";


if(isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["cep"]) && isset($_POST["email"]) && isset($_POST["ek"]))	{
		$ad=$_POST["ad"];
		$soyad=$_POST["soyad"];
		$cep=$_POST["cep"];
		$email=$_POST["email"];
		$ek=$_POST["ek"];

		if($ad!='' && $soyad!=''){
$query = $db->prepare('INSERT INTO kullanici_bilgileri (ad, soyad, email, cep, ek) values( ?, ?, ?, ?, ?)');
$query->execute(array($ad, $soyad, $email, $cep, $ek));

				if($query)
					header("location:index.php");
		}
	}

 ?>