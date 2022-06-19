<?php
session_start();
require("./Table/config.php");


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$passport = $_POST["passport"];
$icard = $_POST["icard"];
$password = $_POST["password"];
$level = 1;


$sql = "INSERT INTO user (fname, lname, email, passport, icard, password , level)
 VALUES ('$fname', '$lname', '$email', '$passport', '$icard', '$password' , '$level' );";

if (mysqli_query($conn, $sql)) {
	echo '<script>
			alert("New record created successfully");
			window.location.href="index.php";
			</script>';
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
