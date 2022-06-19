<?php session_start();   ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">


	<title>BRO FUND ME</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">


	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
						class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
			</div>
			<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav pull-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li ><a href="donate.php">Donate</a></li>
            <li ><a href="myapplication.php">My Application</a></li>

            <li><a href="fundraise.php">Fundraise</a></li>
            <li><a class="btn" href="login.php">Register / Log in</a></li>
<?php if (isset($_SESSION['fname'])) {     ?>
           <li> <i style="padding-left:25px;"> </i>   <i  class='fas fa-user-tie' style='font-size:36px'></i></li>
           <li><a> Welcome <b><?php echo $_SESSION["fname"] ?></b>!</a></li>
        <?php }    ?>   
          </ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">A Bro In Need Is A Bro Indeed</h1>
				<p class="tagline">You can help someone get an education and save a life.
				</p>
				<p><a href="fundraise.php" class="btn btn-default btn-lg" role="button">FUNDRAISE</a>
				 <a href="donate.php" class="btn btn-action btn-lg"
						role="button">DONATE</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<img src="assets/images/malaysia.png" alt="malaysia">
	</div>
	<!-- /Intro-->



	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Do I have to sign up in order to fundraise?</h3>
				<p>Yes, you do.</p>
			</div>
			<div class="col-sm-6">
				<h3>Do I need an account to donate?</h3>
				<p>
					No. You can donate by clicking on the DONATE button.</p>
			</div>
		</div> <!-- /row -->





	</div> <!-- /container -->

	<!-- Social -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_linkedin_counter"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+601456789<br>
								<a href="mailto:#">rose1999@graduate.utm.my</a><br>
								<br>
								Johor, Malaysia
							</p>
						</div>
					</div>





				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> |
								<a href="fundraise.php">Fundraise</a> |
								<a href="donate.php">Donate</a> |
								<b><a href="register.php">Register</a></b>
							</p>
						</div>
					</div>


				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>





	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>

</html>