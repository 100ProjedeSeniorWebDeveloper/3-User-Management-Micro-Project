<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
<meta charset="utf-8">

</head>
<body>
<div>
	<form action="" method="post">
		<table style="margin-left:auto; margin-right:auto; margin-top:30px; margin-bottom:20px;">
			<tr>
				<td><label for="search">Arama Yap : </label></td>
				<td><input style="width:300px;" type="text" name="search" id="search"></td>
				<td><input type="submit" value="ARA"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>

<?php 
include("db.php");

if(!empty($_POST["search"]))
{
$key=$_POST["search"];
$keyw=explode(" ",$key);


	if($keyw[1]=="")
	{
	
	$search = $db->prepare("SELECT * FROM kullanici_bilgileri WHERE ad LIKE ? or soyad LIKE ? or cep LIKE ? or email LIKE ? or ek LIKE ?");
	$search->execute(array('%'.$keyw[0].'%','%'.$keyw[0].'%','%'.$keyw[0].'%','%'.$keyw[0].'%','%'.$keyw[0].'%'));
	
	}else{
	
	$search = $db->prepare("SELECT * FROM kullanici_bilgileri WHERE ad LIKE ? and soyad LIKE ? or cep LIKE ? or email LIKE ? or ek LIKE ?");
	$search->execute(array('%'.$keyw[0].'%','%'.$keyw[1].'%','%'.$keyw[0].'%','%'.$keyw[0].'%','%'.$keyw[0].'%'));
	
	}

	if($search)
	{
		?>
				<table cellpadding="10" style="border:1px solid #ccc">
					<tr>
						<td style="border:1px solid #ccc"><div style="width:100px; color:red;">Musteri Adi</div></td>
						<td style="border:1px solid #ccc"><div style="width:100px; color:red;">Soyadi</div></td>
						<td style="border:1px solid #ccc"><div style="width:150px; color:red;">Cep no</div></td>
						<td style="border:1px solid #ccc"><div style="width:150px; color:red;">E-mail</div></td>
						<td style="border:1px solid #ccc"><div style="width:630px; color:red;">not</div></td>
					</tr>
				</table>

<?php
		foreach ($search as $row) {
?>

			<table cellpadding="10" style="border:1px solid #ccc">
				
				<tr>
					<td style="border:1px solid #ccc"><div style="width:100px; word-wrap:break-word;"><?=$row["ad"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:100px; word-wrap:break-word;"><?=$row["soyad"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:150px; word-wrap:break-word;"><?=$row["cep"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:150px; max-height:50px;  word-wrap:break-word;"><?=$row["email"]; ?></div></td>
					<td style="border:1px solid #ccc"><div style="width:500px; max-height:50px; overflow:auto; word-wrap:break-word;"><?=$row["ek"]; ?></div></td>
					<td style="border:1px solid #ccc"><a href='update.php?id=<?=$row["id"]; ?>'>Edit</a></td>
					<td style="border:1px solid #ccc"><a href='delete.php?id=<?=$row["id"]; ?>'>delete</a></td>
				</tr>

			</table>

<?php
		}


	}	

}




 ?>