<?php

	//Change the username and password fields if using different credentials for your database. The other fields may be changed if applicable.
	$username="clientuser";
	$password="lexluthor";
	$databaseHost="localhost";
	$database="tasklist";	

	//Main function used to connect to the database
	$databaseConnect = @mysqli_connect($databaseHost, $username, $password, $database)
	OR die('Could not connect to database' . mysqli_connect_error());


?>