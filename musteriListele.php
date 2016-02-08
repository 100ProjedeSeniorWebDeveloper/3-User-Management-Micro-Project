<?php include("musteriAyar.php");?>
<html>
	
		<head>
			<title>MusteriListele</title>
		<head>
		
	     <body>
	     	<a href="musteriEkle.php">Musteri Ekle</a>
	     	<form action="musteriArama.php" method="post">
		    	<input type="text" name="kelime" /><input type="submit" value="ARA" />
		    	</form>


	            <?php 
		  

		     	$bul=mysql_query("select * from musteri");
		     	while($goster=mysql_fetch_array($bul))
		     	{
		     	
		     	echo "<div id='musteri'>
		     	<strong>Ad:</strong> {$goster["musteri_ad"]} <br/>
		     	<strong>Soyad:</strong> {$goster["musteri_soyad"]}<br/>
		     	<strong>Cep:</strong> {$goster["musteri_cep"]}<br/>
		     	<strong>E_Mail:</strong> {$goster["musteri_email"]}<br/>
		     	<strong>Not:</strong> {$goster["musteri_not"]}<br/>
		     	<a href='musteriGuncelle.php?id={$goster["id"]}'>[Guncelle]</a><a href='musteriSil.php?id={$goster["id"]}'>[Sil]</a></div>";
		     	}
		     	?>

		     	
	     		
		</body>
</html>

