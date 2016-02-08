<?php include("musteriAyar.php");?>
<html>
	
		<head>
			<title>MusteriEkle</title>
		<head>
		
	     <body>
	     <?php 
		     if($_POST){
		     	$ad=$_POST[ad];
		     	$soyad=$_POST[soyad];
		     	$cep=$_POST[cep];
		     	$email=$_POST[email];
		     	$not=$_POST[not];
		     	if(!empty($ad) && !empty($soyad) && !empty($cep) && !empty($email) && !empty($not)){
		     		//veri ekle
		     		$ekle=mysql_query("insert into musteri(musteri_ad,musteri_soyad,musteri_cep,musteri_email,musteri_not) value('$ad','$soyad','$cep','$email','$not')");
		     		if($ekle){
		     			echo "veriler basariyla eklendi";
		     		}
		     		else
		     			echo "veriler eklenemedi..";
		     	}

		     }else{
		     	?>
		     	<h1>musteri ekleme</h1>
		     	<form action="" method="post">
		     		<table cellpadding="5" cellspacing="5">
		     			<tr>
		     				<td>Ad</td>
		     				<td>:</td>
		     				<td><input type="text" name="ad"/></td>
		     			</tr>
		     			<tr>
		     				<td>Soyad</td>
		     				<td>:</td>
		     				<td><input type="text" name="soyad"/></td>
		     			</tr>
		     			<tr>
		     				<td>Cep</td>
		     				<td>:</td>
		     				<td><input type="text" name="cep"/></td>
		     			</tr>
		     			<tr>
		     				<td>E_Mail</td>
		     				<td>:</td>
		     				<td><input type="text" name="email"/></td>
		     			</tr>
		     			<tr>
		     				<td>Not</td>
		     				<td>:</td>
		     				<td><textarea rows="5" cols="30" name="not"></textarea></td>
		     			</tr>
		     			<tr>
		     				<td></td>
		     				<td></td>
		     				<td><input type="submit" value="GONDER"/></td>
		     			</tr>
		     		</table>
		     	</form>

		     	<? }?>
	     		
		</body>
</html>

