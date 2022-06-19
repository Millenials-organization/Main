<?php  if(!isset($_SESSION['fname'])) session_start(); ?>
<?php include 'filesLogic.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

	<title>Fundraise</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">


	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>


<body>

	<script> function validateForm() {
  let x = document.forms["myForm"]["fgamount"].value;
  if (x < 1) {
    alert("Fundraising Goal Amount must be more then RM 00.00!");
    return false;
 		 }
		}
	</script>

	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
						class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png"
						alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
            <li><a href="index.php">Home</a></li>
            <li ><a href="donate.php">Donate</a></li>
            <li ><a href="myapplication.php">My Application</a></li>

            <li class="active"><a href="fundraise.php">Fundraise</a></li>
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

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Fundraise</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Fundraise Now</h1>
				</header>

			


		

          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-default" style="width: 500px;" >
              <div class="panel-body">
                <h3 class="thin text-center">Fundraise Now</h3>
                <p class="text-center text-muted">
                 If you are already registered, please enter the following details and create an application to raise funds. If not, please 
                  <a href="register.php">register</a> now.
                </p>
                <hr />

                <form name="myForm" action="fundraise.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                  <div class="top-margin">
                    <label>Applicant Name <span class="text-danger">*</span></label>
                    <input name="name" type="text" class="form-control" required/>
                  </div>
                  
                  <div class="top-margin">
                    <label
                      >Email Address <span class="text-danger">*</span></label
                    >
                    <input name="email" type="text" class="form-control" required/>
                  </div>

				  <div class="top-margin">
                    <label
                      >Phone Number <span class="text-danger">*</span></label
                    >
                    <input name="phone" type="text" class="form-control" required/>
                  </div>


					<div class="top-margin">
                    <label
                      >Fundraising Goal Amount: <span class="text-danger">*</span></label
                    >
                    <input name="fgamount" type="text" class="form-control" required/>
                  </div>



				  <div class="top-margin">
                    <label
                      >Description: <span class="text-danger">*</span></label
                    >
                    <textarea  style="width: 100%;height: 150px;" name="description"  class="form-control" required/> </textarea>
                  </div>

				  <div class="top-margin">
                    <label
                      >Document: (zip, pdf, docx)<span class="text-danger">*</span></label
                    >
                    <input name="myfile" type="file" class="form-control" required/>
                  </div>

                  
                    </div>
                  </div>

                  <hr />

                  <div class="row">
                    <div class="col-lg-8">
                      <label class="checkbox">
                        <input type="checkbox" required/>
                        I agree with the terms and conditions.
                      </label>
                    </div>
                    <div class="col-lg-4 text-right">
                      <button name="save" class="btn btn-action" type="submit">
                        Create Application
                      </button>
                    </div>
                  </div>
                </form>
              </div>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>WE ARE HERE FOR YOU!</h4>

				</div>
             
			<img src="assets/images/wordpress-best-donation-plugins.jpg" >	
			</aside>
			<!-- /Sidebar -->

		</div>
	</div> <!-- /container -->

	<section class="container-full top-space">

	</section>

	<footer id="footer">

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
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="register.php">Sign up</a></b>
							</p>
						</div>
					</div>

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

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
	<script src="assets/js/google-map.js"></script>


</body>

</html>