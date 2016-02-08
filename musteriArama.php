<?php 
include("musteriAyar.php");

$kelime=$_POST["kelime"];

$bul=mysql_query("select * from musteri where musteri_ad LIKE '%$kelime%'");
$toplam=mysql_num_rows($bul);
if($toplam>0){
	echo 'sonuc bulundu';
	while ($goster=mysql_fetch_array($bul)){
		extract($goster);
		echo "<div class='yazan'";
		echo ">
			    <strong>Ad:</strong> {$goster["musteri_ad"]} <br/>
		     	<strong>Soyad:</strong> {$goster["musteri_soyad"]}<br/>
		     	<strong>Cep:</strong> {$goster["musteri_cep"]}<br/>
		     	<strong>E_Mail:</strong> {$goster["musteri_email"]}<br/>
		     	<strong>Not:</strong> {$goster["musteri_not"]}<br/>
		     </div>	
		";
	}
}else
echo 'Hic Sonuc Bulunamadii..';


?>

