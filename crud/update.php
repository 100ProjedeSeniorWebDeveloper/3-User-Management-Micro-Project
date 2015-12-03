<meta charset="UTF-8">
<?php 
include ("db.php");

$id=$_GET["id"];



?>
<form action="" method="post">
<h2>Müsteri Düzenle</h2>
	<table cellpadding="10">
		
		<?php 
			if($musteri = $db->query("SELECT * FROM kullanici_bilgileri WHERE id='$id'")){
			foreach($db->query("SELECT * FROM kullanici_bilgileri WHERE id=$id") as $row)
			{
		 ?>
		
			<tr>
				<td>Ad:</td>
				<td><input type="text" name="ad" value="<?php echo $row['ad'];?>"></td>
				<td>Soyad:</td>
				<td><input type="text" name="soyad" value="<?php echo $row['soyad'];?>"></td>
				<td>Not :</td>
				<td><textarea name="ek" cols="50" rows="8"><?php echo $row['ek'];?></textarea></td>
			</tr>
			<tr>
				<td>Tel No:</td>
				<td><input type="text" name="cep" value="<?php echo $row['cep'];?>"></td>
				<td>E-mail:</td>
				<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
				<td></td>
				<td><input type="submit" value="Update"></td>				
			</tr>
		
		<?php 
			}
		}

if(isset($_POST["ad"]))
{
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$cep=$_POST["cep"];
	$email=$_POST["email"];
	$ek=$_POST["ek"];

	$update = $db->prepare("UPDATE kullanici_bilgileri SET ad=?, soyad=?, cep=?, email=?, ek=? WHERE id=$id");
	$update->execute(array($ad, $soyad, $cep, $email, $ek));
	if($update)
	{	header("location:index.php");
}
}
		 ?>
	</table>
</form>