<meta charset="utf-8">

<?php 
include ("dataBase.php");



$data=searchGeneral();

var_dump($data);

header("refresh:2;url=index.php");
die('İşleminiz Gerçekleştiriliyor lütfen İşleminiz bekleyiniz.');

