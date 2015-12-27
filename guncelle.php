<meta charset="utf-8" >

<?php 
include("baglan.php");
 if(isset($_GET["id"]))
 	$id=$_GET["id"];

 if(isset($_POST["eposta"]) && isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["yas"])){
 	$ad=$_POST["ad"];
 	$soyad=$_POST["soyad"];
 	$eposta=$_POST["eposta"];
 	$yas=$_POST["yas"];


 	$guncelle= $db->prepare("UPDATE kullanici_bilgileri SET ad = ?,soyad = ?, eposta = ?, yas = ? WHERE id = ?");

 	$guncelle->execute(array($ad, $soyad, $eposta, $yas, $id));
 	if ($guncelle) {
 		echo "Güncelleme işlemleri başarılı";
 		header("refresh:2;url=index.php");

 	}else
 	echo "guncellemedi";
 }

$users=$db->prepare("SELECT * FROM kullanici_bilgileri WHERE id=? ");
$users->execute(array($id));

if ($users) {
 	
 	foreach ($users as $row) {
 ?>
 	<form action="#" method="post" accept-charset="utf-8">
 		<table width="100%" height="326" border="0" style="margin-left:250px;">
 		<tr>
 			<td></td>
 			<td></td>
 			<td><div style="background:grey;width:350px;font-size:36px;font-weight:bold;font-family:sans-serif;">Güncelleme Sayfası</div></td>
 		</tr>
 		<tr>
 			<td height="46">&nbsp;</td>
 			<td>Adınız:</td>
 			<td><label for="kullanici_adi"></label>
 			<input type="text" name="ad" value="<?php echo $row["ad"]; ?>" ></td>
			<td>&nbsp;</td>
 		</tr>
 		<tr>
 			<td height="50">&nbsp;</td>
 			<td>Soyadınız:</td>
 			<td><input type="text" name="soyad" value="<?php echo $row["soyad"]; ?>" ></td>
 			<td>&nbsp;</td>
 		</tr>
 		<tr>
 			<td height="47">&nbsp;</td>
 			<td>e-postanız:</td>
 			<td><input type="text" name="eposta" value="<?php echo $row["eposta"]; ?>" ></td>
 			<td>&nbsp;</td>
 		</tr>
 		<tr>
 			<td height="47">&nbsp;</td>
 			<td>Yaşınız:</td>
 			<td><input type="text" name="yas" value="<?php echo $row["yas"]; ?>" ></td>	
 		</tr>
 		<tr>
 			<td height="74">&nbsp;</td>
 			<td>&nbsp;</td>
 			<td><input type="submit" name="buton" value="Güncelle" ></td>
 			<td>&nbsp;</td>
 		</tr>
 	</table>	 	
 	</form>

<?php

 	}
 }
