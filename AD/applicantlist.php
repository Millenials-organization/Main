<?php session_start();   ?>
<?php include 'filesLogic.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

	<title>Applicant List</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">


	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
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
					<li class="active"><a href="">Applicant List</a></li>
					<li ><a href="fundraisestaff.php">Fundraise</a></li>
					<li><a class="btn" href="login.php">Log out</a></li>
					<li> <i style="padding-left:25px;"> </i>   <i  class='fas fa-user-tie' style='font-size:36px'></i></li>
           <li><a> Welcome <b><?php echo $_SESSION["fname"] ?></b>!</a></li>
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
			<li class="active">Applicant List</li>
			
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Applicant List</h1>
				</header>



		


		<?php foreach ($files as $file): if($file['approval']=="New") {?>

			 <h3>Application  <?php echo $file['id']; ?>  </h3>
          <br>
         

			<b>Applicant name:</b> <?php echo $file['name']; ?>  </br>
			<b>Phone Number: </b>	<?php echo $file['phone']; ?> </br>
			<b>Email: </b>			<?php echo $file['email']; ?>  </br>

			<b>Fund Goal:</b>  RM<?php echo $file['fundgoal']; ?>  </br>


			<p><br>
			<b>Description: </b></br>   <?php echo $file['description']; ?> 
			<br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
            consequuntur eius repellendus eos aliquid molestiae ea laborum ex
            quibusdam laudantium voluptates placeat consectetur quam aliquam
            beatae soluta accusantium iusto nihil nesciunt unde veniam magnam
            repudiandae sapiente.
			</p> </br>

			<b>Document:</b> <br>

			<a href="applicantlist.php?file_id=<?php echo $file['id'] ?>"> <button type="button" class="btn btn-link">Download</button></a>
          <a href="uploads/<?php echo $file['document'] ?>"> <button type="button" class="btn btn-link">View</button></a>
          <p>
            Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere
            sint pariatur! Voluptatibus, quisquam, error, est assumenda corporis
            inventore illo nesciunt iure aut dolor possimus repellat minima
            veniam alias eius!
          </p>

	<?php $var= 0; ?>
	<hr>

<?php } endforeach;?>	

		

	<?php if(!isset($var)) {    echo "Currently, No applicant found!"?>
          <img src="assets/images/mac.png" >
        <?php  } ?>	


			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					
<form style="position:fixed; float: right; " method="POST" action="approval.php">  
		
			
		<div class="top-margin">
                    <label>Application Number <span class="text-danger">*</span></label>
                    <input name="aid" type="text" class="form-control" required />
                  </div>
				  <br>
		


		<input type="submit" name="approval" value="Approved" class="btn btn-success">
      	<input type="submit" name="approval" value="Decline" class="btn btn-danger">
			</form>
				</div>

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