<meta charset="utf-8">
<?php 
include("db.php");

if(!empty($_POST["search"]))
{
$key=$_POST["search"];
$keyw=explode(" ",$key);




	$search = $db->prepare("SELECT * FROM kullanici_bilgileri WHERE ad LIKE ? and soyad LIKE ?");
	$search->execute(array('%'.$keyw[0].'%','%'.$keyw[1].'%'));

if($keyw[1]=="")
{
	$search = $db->prepare("SELECT * FROM kullanici_bilgileri WHERE ad LIKE ? or soyad LIKE ?");
	$search->execute(array('%'.$keyw[0].'%','%'.$keyw[0].'%'));
}


	if($search)
	{
		?>
				<table cellpadding="10">
					<tr>
						<td><div style="width:100px;">Musteri Adi</div></td>
						<td><div style="width:100px;">Soyadi</div></td>
						<td><div style="width:150px;">Cep no</div></td>
						<td><div style="width:150px;">E-mail</div></td>
						<td><div style="width:630px;">not</div></td>
					</tr>
				</table>

<?php
		foreach ($search as $row) {
?>

			<table cellpadding="10">
				
				<tr>
					<td><div style="width:100px; word-wrap:break-word;"><?php echo $row["ad"]; ?></div></td>
					<td><div style="width:100px; word-wrap:break-word;"><?php echo $row["soyad"]; ?></div></td>
					<td><div style="width:150px; word-wrap:break-word;"><?php echo $row["cep"]; ?></div></td>
					<td><div style="width:150px; max-height:50px;  word-wrap:break-word;"><?php echo $row["email"]; ?></div></td>
					<td><div style="width:500px; max-height:50px; overflow:auto; word-wrap:break-word;"><?php echo $row["ek"]; ?></div></td>
					<td><a href='update.php?id=<?php echo $row["id"]; ?>'>Edit</a></td>
					<td><a href='delete.php?id=<?php echo $row["id"]; ?>'>delete</a></td>
				</tr>

			</table>

<?php
		}


	}	

}




 ?>