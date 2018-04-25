<?php
	/*** MySQL database host.*/
	define('db_host', 'localhost');

	/*** MySQL database username */
	define('db_username', 'root');

	/*** MySQL database password */
	define('db_password', '');

	/*** MySQL database name. */
	define('db_name', 'services');

	$conn = mysqli_connect(db_host, db_username, db_password, db_name);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>