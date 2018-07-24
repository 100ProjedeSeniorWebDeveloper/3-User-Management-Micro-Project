<?php 
include 'baglantı.php';
if (isset($_GET["sil"])) 
	{
	$v=$db->prepare("DELETE FROM `customers` WHERE `customers`.`id` = ?;" );
	$v->execute(array($_GET["sil"]));
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
<style>
		#res{
		margin-top: -9px;
		padding-bottom: 15px;
		margin-left: 35px;
		}
		#bar{
			background-color: #283E4A;
		}	
		#icon{
			color: white;
		}
		#mavi{
			color: #0073B1;
			font-size: 15px;
		}
		#resim{
			width: 100px;
			height: 130px;
		}
		#tepe{
			padding-left: 0px;
			width: 1320px;
		}
		#box{
			border:3px;
		}
		#yazi{
			margin-left: 25px;
			font-family: arial;
			font-size: 30px;
			border-bottom: 2px solid #e5e5e5;
		}
		#yazi1{
			margin-top: 5px;
			font-family: arial;
			font-size: 20px;
		}
		#textbox{
			margin-left: 23px;
		}
		#arama{
			width: 300px;
			margin-top: 30px;
		}
		#buton1{
			padding-left: 20px;
			margin-left: 800px;
			margin-top: 15px;
			margin-bottom: 15px;
		}
</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="tepe" class="container-fluid">
	<header>	
		<nav class="navbar navbar-default">
	    			<div class="navbar-header">
	      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        				<span class="sr-only">Toggle navigation</span>
	       					<span class="icon-bar"></span>
	        				<span class="icon-bar"></span>
	        				<span class="icon-bar"></span>
	      				</button>
	      				<a id="res" class="navbar-brand" href="#"><img src="https://vignette.wikia.nocookie.net/the-most-popular-girls-in-school/images/1/1a/Linkedin.png/revision/latest?cb=20150730204727" width="35px" height="35px" alt=""></a>
	    			</div>
				    <div id="bar" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  					
				      	<ul class="nav navbar-nav navbar-right">
				       		<li> <a id="icon" href="https://localhost/proje/inde.php">Listele</a></li>
				         	<li> <a id="icon" href="https://localhost/proje/ekle.php">Ekle</a></li>
				      	</ul>
				    </div>
			<div class="row">	
				<div class="container-fluid">
					<form action="ara.php" method="post">
					<input id="arama" name="ara" type="text" placeholder="Arama Yap">
				    <input type="submit" value="arama yap"> 
					</form>
				    
				    <a id="buton1" href="https://localhost/proje/ekle.php" class="btn btn-primary" role="button">Müşteri Ekle</a>
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">Ad</th>
					      <th scope="col">Soyad</th>
					      <th scope="col">Cep No</th>
					      <th scope="col">e-mail</th>
					      <th scope="col">Not</th>
					      <th scope="col"></th>
					  </thead>
					  <tbody>
					<?php 
						$veri = $db->prepare("select * from customers  ");
						$veri ->execute([]);
						while ($islem=$veri->fetch(PDO::FETCH_ASSOC)) 
						{
					?>
							<tr>
						      <td><?php echo $islem["ad"]; ?></td>
						      <td><?php echo $islem["soyad"]; ?></td>
						      <td><?php echo $islem["cep"]; ?></td>
						      <td><?php echo $islem["mail"]; ?></td>
						      <td><?php echo $islem["not"]; ?></td>
						      <td> 		    	 
						      <a href="?sil=<?php echo $islem["id"] ?>">Sil</a>
						      <a href="guncelle.php?id=<?php echo $islem['id'] ?>">Guncelle</a>									
						      </td>
						    </tr>
					<?php 									
						}
					?>
					  </tbody>
					</table>
				</div>	
			</div>
</div>
		</nav>
	</header>
</div>
<footer>
	<div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
  </div>
</footer>
</body>
</html>
