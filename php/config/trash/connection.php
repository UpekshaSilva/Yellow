<?php
	// Create a database connection
	$connection = new mysqli("localhost", "root", "", "yellow");
	
	if (!$connection) {
		die("Database connection failed: " . $connection->connect_error);
	}
?>