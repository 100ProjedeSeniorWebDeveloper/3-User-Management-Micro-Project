<?php  

try{
$db=new PDO("mysql:host=localhost;dbname=pdo","root","");
}
catch(PDOexpection $a){

print $a->getMessage();

}

?>
