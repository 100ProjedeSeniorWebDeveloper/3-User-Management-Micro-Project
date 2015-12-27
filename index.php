<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php 
include("baglan.php"); ?>

<h2>KAYIT OL</h2>

<form action="#" method="post" accept-charset="utf-8"
name="formekle">
	
<table cellpadding="10" border="0" >
		<tr>
			<td>Ad:</td>
			<td><input type="text" name="ad" style="border-radius:3px; padding:5px;" required/></td>
		</tr>
		<tr>
			<td>Soyad:</td>
			<td> <input type="text" name="soyad" style="border-radius:3px; padding:5px;" required/></td>
		</tr>
		<tr>
			<td>e-posta:</td>
			<td><input type="text" name="eposta" style="border-radius:3px; padding:5px;" required/></td>
		</tr>
		<tr>
			<td>Yaş:</td>
			<td><input type="text" name="yas" style="border-radius:3px; padding:5px;" required/></td>
		</tr>

</table>
		<br>
		<div>
			<button style="float:left;margin-left:200px;">Kayıt ol!</button>
		</div>
</form>
		
<br>

<?php 
include("kayit_ekleme.php");
 ?>

 <!--Arama bölümü -->

<br>
<br>
 <form action="index.php" name="formara" method="post" accept-charset="utf-8">
	<input type="text" name="ara" style="padding:15px;width:250px;" placeholder="Arayacağınız kelimeyi yazınız" >
	<input type="submit" style="padding:15px; background:red; color:white; font-weight:bold;" value="Ara" />
</form>
<?php 

if(isset($_POST["ara"])){

	$gelen=$_POST["ara"];

	if(empty($gelen)){

		echo "<script> alert ('Lütfen boş bırakmayınız...')</script>";

	}else{
		$ara=$db->prepare("SELECT * FROM kullanici_bilgileri WHERE ad LIKE ? or soyad LIKE? or eposta LIKE? or yas LIKE? ");
		$ara->execute(array('%'.$gelen.'%','%'.$gelen.'%','%'.$gelen.'%','%'.$gelen.'%'));
		$liste= $ara->fetchAll(PDO::FETCH_ASSOC);

		if ($ara->rowCount() !="0") {

?><table border="1" cellpadding="8" style="background:orange;"><?php
	
	foreach ($liste as $bas) {
		?> <tr>
			<td><?php echo $bas["ad"]; ?></td>
			<td><?php echo $bas["soyad"]; ?></td>
			<td><?php echo $bas["eposta"]; ?></td>
			<td><?php echo $bas["yas"]; ?></td>
		</tr>
		<?php 
	}
	?></table><br><br><?php 
	 }else{
	 	echo "Aranan kelimeye göre veri bulunamadı :( ";
	 }
		}
	}

// Verileri listeleme alanı...

echo "</br>";
echo "</br>";

		if($users=$db->query('SELECT * FROM kullanici_bilgileri WHERE 1')){
	?><table border="1" cellpadding="10">
		   <tr style="background:yellow; padding:20px;">
           <td>Ad</td>
           <td>Soyad</td>
           <td>e-posta</td>
           <td>Yaş</td>
           <td style="background:green;">Güncelle</td>
           <td style="background:red;">Sil</td>
           </tr>
	
<?php 
}
	foreach ($db->query("SELECT *FROM kullanici_bilgileri ") as $row) {
?>
	<tr style="background: rgba(296,236,0,0.56);">
		<td> <?php echo $row['ad']; ?></td>
		<td> <?php echo $row['soyad']; ?></td>
		<td> <?php echo $row['eposta']; ?></td>
		<td> <?php echo $row['yas']; ?></td>
		<td> <a href="guncelle.php?id=<?php echo $row['id'];?>"><button>Güncelle</button></a></td>
		<td> <a href="sil.php?id=<?php echo $row['id']; ?>" ><button>Sil</button></a></td>
	</tr>
	<?php


}
?>
</table>
