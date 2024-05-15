<?php
	session_start();

	// Define database
	define('dbhost', 'db-1');
	define('dbuser', 'akarsh');
	define('dbpass', 'akarsh');
	define('dbname', 'newrent');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
