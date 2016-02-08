
<?php
include("musteriAyar.php");
$id=@$_GET["id"];

if($_POST){
		$ad=$_POST[ad];
		$soyad=$_POST[soyad];
		$cep=$_POST[cep];
		$email=$_POST[email];
		$not=$_POST[not];
		$guncelle=mysql_query("UPDATE musteri SET musteri_ad='$ad',musteri_soyad='$soyad',musteri_cep='$cep',musteri_email='$email',musteri_not='$not' WHERE id='$id'");
		if($guncelle){
			include("musteriListele.php");

		}else{
			echo 'Bir sorun olustu<br/>'.mysql_error();
		}

}else{
	//Mesajı Bul
$bul=mysql_query("select * from musteri where id='$id'");
$goster=mysql_fetch_array($bul);
extract($goster);

echo '<h1>Guncelleme</h1>
<form action="" method="post">
<table cellpadding="5" cellspacing="5">
<tr>
	<td>Ad</td>
	<td>:</td>
	<td><input type="text" name="ad" value="'.$musteri_ad.'"</td>

</tr>
<tr>
	<td>Soyad</td>
	<td>:</td>
	<td><input type="text" name="soyad" value="'.$musteri_soyad.'"</td>

</tr>
<tr>
	<td>Cep</td>
	<td>:</td>
	<td><input type="text" name="cep" value="'.$musteri_cep.'"</td>

</tr>
<tr>
	<td>E_Mail</td>
	<td>:</td>
	<td><input type="text" name="email" value="'.$musteri_email.'"</td>

</tr>
<tr>
	<td>Not</td>
	<td>:</td>
	<td><textarea rows="5" cols="30" name="not" value="'.$musteri_not.'"></textarea></td>
		     			
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" value="GUNCELLE" /></td>	     			
</tr>
</table>
</form>';
}
?>
