<?php

require("./Table/config.php");



$ID= $_POST["aid"];


			$sql = "DELETE FROM applicantlist WHERE id = '$ID'";
	
		

if (mysqli_query($conn, $sql)) {
				echo '<script>
			
			window.location.href="myapplication.php";
			</script>';
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);

		?>