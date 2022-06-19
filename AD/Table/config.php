	<?php

	// $db_host = "sql6.freesqldatabase.com";
	// $db_user = "sql6467270";
	// $db_pass = "z6UZhzj5jw";
	// $db_name = "sql6467270";

	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "brodatabase";

	// login to MySQL Server from PHP
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	?>
