<?php
////////////// Veritabanına bağlanmayı sağlayan sorgu ////
try{
$db= new PDO("mysql:host=localhost;dbname=crud","root","123456");
}
catch (PDOexception $e){
print $e->getMessage();
}
?>