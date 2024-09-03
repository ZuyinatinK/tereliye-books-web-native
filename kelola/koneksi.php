<?php
	// database connection
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "dbprogrammingblog";
	$koneksi = mysqli_connect($host, $username, $password, $database);

	if ($koneksi) {
		echo "";
	} else {
		echo "Server not connected";
	}
?>
