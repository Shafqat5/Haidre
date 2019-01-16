<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="apps";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if (!$conn) {
		die("could not connect");

	}
	else{
		echo "";
	}
 ?>