<?php 
include ("db.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>User-Management-Micro-Project</title>
	<style>
table, th, td {
    border: 1px solid #ccc;
}
</style>
</head>
<body>
<div style="float:right; padding:20px;">

	<a href="insert.php"><input type="button" value="Yeni Müşteri Ekle" style="width:200px; height:50px;"></a>
	<a href="search.php"><input type="button" value="ARAMA YAP" style="width:200px; height:50px;"></a>

</div>


<form action="">
<h2>Müsteri Listesi</h2>
	<table cellpadding="10">
		<tr>
			<td><b>Musteri Adi</b></td>
			<td><b>Soyadi</b></td>
			<td><b>Cep no</b></td>
			<td><b>E-mail</b></td>
			<td><b>not</b></td>
		</tr>
		<?php 
		//verileri listeleme işlemi
		//id degeri buyuk olan üstte gözükecek.
			if($musteri = $db->query('SELECT * FROM kullanici_bilgileri WHERE 1')){
			foreach($db->query("SELECT * FROM kullanici_bilgileri order by id desc") as $row)
			{
		 ?>
		<tr>
			<td><div style="width:100px; word-wrap:break-word;"><?=$row["ad"]; ?></div></td>
			<td><div style="width:100px; word-wrap:break-word;"><?=$row["soyad"]; ?></div></td>
			<td><div style="width:150px; word-wrap:break-word;"><?=$row["cep"]; ?></div></td>
			<td><div style="width:150px; max-height:50px;  word-wrap:break-word;"><?=$row["email"]; ?></div></td>
			<td><div style="width:500px; max-height:50px; overflow:auto; word-wrap:break-word;"><?=$row["ek"]; ?></div></td>
			<td><a href='update.php?id=<?=$row["id"]; ?>'>Edit</a></td>
			<td><a href='delete.php?id=<?=$row["id"]; ?>'>delete</a></td>
		</tr>

		<?php 
			}
		}
		 ?>

	</table>
</form>
</div>
</body>
</html>
