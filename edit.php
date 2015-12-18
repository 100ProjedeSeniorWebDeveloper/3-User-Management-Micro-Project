<html>
<head>
	<meta charset="utf-8">
	<title>Müşteri Destek Hattı</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


	<?php include("dataBase.php");  ?>

	<div id="container"> 
		<form name="form" method="post" action="#">
			<div id="head">
				<div class="childHead">id</div>
				<div class="childHead">Ad</div>
				<div class="childHead">Soyad</div>
				<div class="childHead">Cep</div>
				<div class="childHead">Email</div>
				<div class="childHead">Not</div>
				<div class="childHead">Eylem</div>
				
			</div>

				<?php



				if(isset($_GET['id'])){
                   
                   	$search=$_GET['id'];
                   //echo $search;
                   

				  $data=searchId($search);  
 				  foreach ($data as $key) { ?>
				
			<div id="input">

				<div class="inp"><input id="userid" class="text" name="userid" disabled type="text" value="<?php echo $key->id; ?>"></div>
				<div class="inp"><input id="userName" class="text" name="userName" type="text" value="<?php echo $key->ad; ?>"></div>
				<div class="inp"><input id="userSurname" class="text" name="userSurname" type="text" value="<?php echo $key->soyad; ?>"></div>
				<div class="inp"><input id="userTel" class="text" name="userTel" type="text" value="<?php echo $key->cep; ?>"></div>
				<div class="inp"><input id="userEmail" class="text" name="userEmail" type="text" value="<?php echo $key->email; ?>"></div>
				<div class="inp"><input id="userinfo" class="text" name="userinfo" type="text" value="<?php echo $key->not; ?>"></div>
				                                                     
				<div class="inp"><a href="index.php">Ana Sayfa</a><br><button name="save" value="save">Güncelle</button></div>
				
			</div>
			<?php } } ?>
			<div id="middle">
				<?php   foreach (getData() as $key) {
					
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
						<a href="edit.php?id=<?php echo $id; ?>" style="text-decoration:none;">Düzenle</a>
										</div>
										<div class="event">
											<a href="delete.php?<?=$id ?>"  style="text-decoration: none;">Sil</a>
										</div>
									
				</div> 
				<?php } ?>
			</div>
		</form>

	</div>

</body>
</html>
<div id="demo"></div>





<?php




if(isset($_POST['save'])){


updateData();


}

