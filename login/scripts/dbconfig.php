<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "phrdb";
	mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
	//echo "success connected to db!";
	mysql_select_db($dbname) or die('database selection problem');
?>