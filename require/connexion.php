<?php 
	 $DB_SERVER = "localhost"; 
	 $DB_USER = "root"; 
	 $DB_PASS = ""; 
	 $DB_DATABASE = "DB_ThioGGou_BDD";
	try { 
		$connect =  new PDO("mysql:host=$DB_SERVER; dbname=$DB_DATABASE", $DB_USER,$DB_PASS); 
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch (PDOException $e) { 
		$error="Erreur de base de donnée..!"; 
	}  
	$connect->query("set names'utf8' ");
?>