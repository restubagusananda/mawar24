<?php 
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "db_olshop";
	
	$con 	= mysql_connect($host, $user, $pass);
	$condb	= mysql_select_db($db, $con);
	
?>