<meta charset="UTF-8">
<?php 
include ("db.php");

$id=$_GET["id"];



?>
<form action="" method="post">
<h2>Müsteri Düzenle</h2>
	<table cellpadding="10">
		
		<?php 
		$musteri=$db->prepare("SELECT * FROM kullanici_bilgileri where id=?");
		$musteri->execute(array($id));

		if($musteri)
			
			foreach($musteri as $row)
			{
		 ?>
		
			<tr>
				<td>Ad:</td>
				<td><input type="text" name="ad" value="<?=$row['ad'];?>"></td>
				<td>Soyad:</td>
				<td><input type="text" name="soyad" value="<?=$row['soyad'];?>"></td>
				<td>Not :</td>
				<td><textarea name="ek" cols="50" rows="8"><?=$row['ek'];?></textarea></td>
			</tr>
			<tr>
				<td>Tel No:</td>
				<td><input type="text" name="cep" value="<?=$row['cep'];?>"></td>
				<td>E-mail:</td>
				<td><input type="text" name="email" value="<?=$row['email'];?>"></td>
				<td></td>
				<td><input type="submit" value="Update"></td>				
			</tr>
		
		<?php 
			}
		

if(isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["cep"]) && isset($_POST["email"]) && isset($_POST["ek"]))
{
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$cep=$_POST["cep"];
	$email=$_POST["email"];
	$ek=$_POST["ek"];

	$update = $db->prepare("UPDATE kullanici_bilgileri SET ad=?, soyad=?, cep=?, email=?, ek=? WHERE id=?");
	$update->execute(array($ad, $soyad, $cep, $email, $ek,$id));
	if($update)
	{	header("location:index.php");
}
}
		 ?>
	</table>
</form>