
<meta charset="utf-8">

<?php 
include ("dataBase.php");





$id=$_GET['id'];
deleteData($id);

header("refresh:2;url=index.php");
die('İşleminiz Gerçekleştiriliyor lütfen İşleminiz bekleyiniz.');

