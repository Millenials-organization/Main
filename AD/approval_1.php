<?php

require("./Table/config.php");


$ID= $_POST["aid"];
$approval= $_POST["approval"];

			$sql = "UPDATE applicantlist SET approval = '$approval' WHERE id='$ID' ";
	
		

if (mysqli_query($conn, $sql)) {
				echo '<script>
			
			window.location.href="applicantlist.php";
			</script>';
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);

		?>