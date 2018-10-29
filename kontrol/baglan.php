<?php
	
	$host="localhost";
	$user="root";
	$pass="";
	$db="koubilisim";

	$db = mysqli_connect($host, $user, $pass,$db);
	$sql = "SET NAMES utf8";
	$db->query($sql);
		
	 if (mysqli_connect_errno()) 
	 {
         die("ERROR : -> ".$db->connect_error);
     }	
	
	error_reporting(0);
	setlocale(LC_TIME, 'tr_TR');
	
?>