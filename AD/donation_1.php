<?php
 session_start();  
 
if(!isset($_SESSION['fname'])){
  
header("Location: login.php");
}

require ('configstripe.php');
?>
<form action="submitstripe.php" method="post">
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $publishableKey?>"
       data-amount="500000"
       data-name="Programming with Vishal"
       data-description="Programming with Vishal Desc"
        data-image=
        "assets/images/logo.png"
        data-currency="myr"
        data-email="phpvishal@gmail.com"
        >
    </script>
</form>