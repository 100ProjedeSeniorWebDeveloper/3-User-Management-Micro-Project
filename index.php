<html>
<head>
	<meta charset="utf-8">
	<title>Müşteri Destek Hattı</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


	<?php include("dataBase.php");  ?>

	<div id="container"> 
		<form name="form" method="post" action="search.php">
		
			<div id="head" style="margin-bottom:5;">

				<div class="inp">ARA</div>
				<div class="inp" ><input class="text" name="scrh" type="text" style="width:620;"></div>
				<div class="inp"></div>
				<div class="inp"></div>
				<div class="inp"></div>
				<div class="inp"></div>
				
				<div class="inp"><button name="save" value="save" onclick="save();">ARA</button>

								<a href="add.php" style="text-decoration: none; background-color:grey;">Ekle</a>
				</div>
				
			</div>
			<div id="head">
				<div class="childHead">id</div>
				<div class="childHead">Ad</div>
				<div class="childHead">Soyad</div>
				<div class="childHead">Cep</div>
				<div class="childHead">Email</div>
				<div class="childHead">Not</div>
				<div class="childHead">Eylem</div>
				
			</div>
			
			<div id="middle">
				<?php $data=getData();  foreach ($data as $key) {
					
					$id=$key->id;
					$ad=$key->ad;
					$soyad=$key->soyad;
					$cep=$key->cep;
					$email=$key->email;
					$info=$key->info;

				?>


			
				<div class="childMiddle"><?php echo $id; ?></div>
				<div class="childMiddle"><?php echo $ad; ?></div>
				<div class="childMiddle"><?php echo $soyad; ?></div>
				<div class="childMiddle"><?php echo $cep; ?></div>
				<div class="childMiddle"><?php echo $email; ?></div>
				<div class="childMiddle"><?php echo $info; ?></div>
				<div class="childMiddle"><div class="event">
											<a href="edit.php?id=<?=$id ?> " style="text-decoration: none;">Düzenle</a>
										</div>
										<div class="event">
											<a href="delete.php?id=<?=$id ?>"  style="text-decoration: none;" onclick="">Sil</a>
										</div>
			    </div> 
				<?php } ?>
			</div>
		</form>

	</div>

</body>
</html>



