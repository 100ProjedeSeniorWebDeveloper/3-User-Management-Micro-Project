<?php 
include ("db.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Crud</title>
	<style>
table, th, td {
    border: 1px solid #ccc;

}
</style>
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
				<td>Not :</td>
				<td><textarea name="ek"></textarea></td>
			</tr>
			<tr>
				<td>Tel No:</td>
				<td><input type="text" name="cep"></td>
				<td>E-mail:</td>
				<td><input type="text" name="email"></td>
				<td></td>
				<td><input type="submit" value="Kayıt Ekle"></td>				
			</tr>
		</table>
	</form>
</div>
	<?php 
		//insert işlemini sayfaya cağırıyoruz.
	include "insert.php";

 	?>

<br>
<br>

<div>
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="search">Arama Yap</label></td>
				<td><input type="text" name="search" id="search"></td>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>
</div>
<br>
<?php include "search.php"; ?>
<div>

<form action="">
<h2>Müsteri Listesi</h2>
	<table cellpadding="10">
		<tr>
			<td>Musteri Adi</td>
			<td>Soyadi</td>
			<td>Cep no</td>
			<td>E-mail</td>
			<td>not</td>
		</tr>
		<?php 
		//verileri listeleme işlemi
		//id degeri buyuk olan üstte gözükecek.
			if($musteri = $db->query('SELECT * FROM kullanici_bilgileri WHERE 1')){
			foreach($db->query("SELECT * FROM kullanici_bilgileri order by id desc") as $row)
			{
		 ?>
		<tr>
			<td><div style="width:100px; word-wrap:break-word;"><?php echo $row["ad"]; ?></div></td>
			<td><div style="width:100px; word-wrap:break-word;"><?php echo $row["soyad"]; ?></div></td>
			<td><div style="width:150px; word-wrap:break-word;"><?php echo $row["cep"]; ?></div></td>
			<td><div style="width:150px; max-height:50px;  word-wrap:break-word;"><?php echo $row["email"]; ?></div></td>
			<td><div style="width:500px; max-height:50px; overflow:auto; word-wrap:break-word;"><?php echo $row["ek"]; ?></div></td>
			<td><a href='update.php?id=<?php echo $row["id"]; ?>'>Edit</a></td>
			<td><a href='delete.php?id=<?php echo $row["id"]; ?>'>delete</a></td>

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
