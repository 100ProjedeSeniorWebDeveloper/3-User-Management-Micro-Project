<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
include("baglan.php"); ?>

<?php 
if(isset($_POST["eposta"]) && isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["yas"])) {
	
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$eposta=$_POST["eposta"];
	$yas=$_POST["yas"];

	$query=$db->prepare("INSERT INTO `kullanici_bilgileri` (`ad`,`soyad`,`eposta`,`yas`) VALUES (?,?,?,?);");
    $query->execute(array($ad,$soyad,$eposta,$yas));

    header("refresh:0;url=index.php"); 
    die('Verileriniz kayıt ediliyor lütfen bekleyiniz...');  //Kayıt eklendikçe sayfayı yenileyip, yenileme mesajı yazar.

} 


 ?>