<?php 


	/**
	*
	*@param var sql select and args array
	*
	*/
	function sql($sql,$args=[]){

		try {
			
			$db = new PDO("mysql:host=localhost;dbname=customer","root","root"); 

			$query = $db->prepare($sql);

			$query->execute($args);

			$collection = $query->fetchAll(PDO::FETCH_OBJ);

			return $collection;
		} catch (Exception $e) {
			
			print $e->getMessage();

		}



	}

		/**
	*
	*@param 
	*
	*sent data db
	*succesfull running
	*/



	function sentData(){

			

			//$id=$_POST['userid'];
			$name=$_POST['userName'];
			$surName=$_POST['userSurname'];
			$tel=$_POST['userTel'];
			$email=$_POST['userEmail'];
			$info=$_POST['userinfo'];

	       
			
			return sql("INSERT INTO musteri (`ad`, `soyad`, `cep`, `email`, `not`)Values(?,?,?,?,?)",[$name,$surName,$tel,$email,$info]);
		

	}


	/**
	*
	*@param 
	*
	*gel all data db
	*succesfull running
	*/

	function getData(){

		try {

			return sql('select * from musteri ');
			
		} catch (Exception $e) {
			
			echo $e;
		}

		

	}


		
		/**
	*
	*@param 
	*
	*update data db
	*succesFull running
	*/

	function updateData(){


	$id=$_POST['userid'];
	$name=$_POST['userName'];
	$surName=$_POST['userSurname'];
	$tel=$_POST['userTel'];
	$email=$_POST['userEmail'];
	$info=$_POST['userinfo'];

	
	
		try {
			//update fonksiyonu çalıştıramadım benden kaynaklı da olabilr iki şekilde denedim olmadı... :/
			sql('UPDATE `musteri` SET `ad`=?,`soyad`=?,`cep`=?,`email`=?,`not`=? WHERE id=?',[$userName,$surName,$tel,$email,$info,$id]);
			//sql("UPDATE `musteri` SET ad=?,  soyad=?, cep=?, email=?, not=? WHERE  id='$id' ",[$name,$surName,$tel,$email,$info]);

			
		} catch (Exception $e) {
			
			echo $e;		

		}



	}

		/**
	*
	*@param 
	*
	*delete data db
	*succesfull running
	*/

	function deleteData($i){



		try {
			sql(" DELETE FROM musteri  WHERE id=? ",[$i]);
			
			
		} catch (Exception $e) {

			echo $e;
			
		}

	}

	/**
*
*
*@param this function return data on table yazilar from db
*
*
**/


function searchId($id){

	
	
	
	return sql("SELECT * FROM musteri WHERE id LIKE ?",[$id]);

	
}

function searchGeneral(){

	$search=$_POST['scrh'];
	
	$search='%'.$search.'%';

	//helpmee çalışmıyor...
return sql("SELECT * FROM musteri WHERE ad LIKE ? OR soyad LIKE ? OR cep LIKE ? OR email LIKE ? OR not LIKE ? ",[$search,$search,$search,$search,$search]);

	
}



