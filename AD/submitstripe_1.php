<?php

session_start();

require ('configstripe.php');
if(isset($_POST['stripeToken'])){
    \stripe\Stripe::setVerifySslcerts (false);
    $token=$_POST['stripeToken'];
    $data=\Stripe\Charge::create (array(
        "amount"=> $_SESSION["amount"]*100 ,
        "currency"=>"myr",
        "description"=>"A Bro In Need Is A Bro Indeed",
        "source"=>$token
    ));
         
}



require("./Table/config.php");





$currentfund = $_SESSION["currentfund"] + $_SESSION["amount"];
$ID= $_SESSION["aid"];
$approval= $_POST["approval"];

			$sql = "UPDATE applicantlist SET currentfund = '$currentfund' WHERE id='$ID' ";
	
		

if (mysqli_query($conn, $sql)) {
				echo '<script>
			
			window.location.href="donate.php";
			</script>';
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);









    ?>