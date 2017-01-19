<?php

	$username="clientuser";
	$password="lexluthor";
	$databaseHost="localhost";
	$database="tasklist";	

	$databaseConnect = @mysqli_connect($databaseHost, $username, $password, $database)
	OR die('Could not connect to database' . mysqli_connect_error());


?>