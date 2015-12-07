<meta charset="UTF-8">
<?php 
include "db.php";
if(isset($_GET["id"]))
	$id=$_GET['id'];


	$musteri=$db->prepare("SELECT * FROM kullanici_bilgileri where id=?");
	$musteri->execute(array($id));
		
		$count=$musteri->rowCount();
			if($count==1)
			{
?>

<form method="post">
<label>Müsteri bilgilerini silmek istediğinizden emin misiniz?</label>
	<input type="submit" name="sil" value="SİL">
	<input type="submit" name="vazgec" value="Vazgec">
</form>

<?Php
				if($_POST["vazgec"])
					header("location:index.php");

 				if($_POST["sil"])
 				{
 				$delete = $db->prepare('DELETE FROM kullanici_bilgileri WHERE id = ? ');
				$delete->execute(array($id));

 					if($delete)
 						header("location:index.php");
 				 } 
			 }else{
			 	echo "Icerik Bulunamadi. Anasayfaya Yönlendiriliyorsunuz..";
						header("refresh:2; url=index.php");
				}
 ?>