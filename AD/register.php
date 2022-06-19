<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />

    <title>Sign up</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png" />

    <link
      rel="stylesheet"
      media="screen"
      href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <link
      rel="stylesheet"
      href="assets/css/bootstrap-theme.css"
      media="screen"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>

  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom">
      <div class="container">
        <div class="navbar-header">
          <!-- Button for smallest screens -->
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse"
          >
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"
            ><img src="assets/images/logo.png" alt="Progressus HTML5 template"
          /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="index.php">Home</a></li>
            <li ><a href="donate.php">Donate</a></li>
            <li ><a href="fundraise.php">Fundraise</a></li>
            <li class="active"><a class="btn" href="login.php">Register / Log in</a></li>

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
        <li class="active">Registration</li>
      </ol>

      <div class="row">
        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
          <header class="page-header">
            <h1 class="page-title">Registration</h1>
          </header>

          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <h3 class="thin text-center">Register a new account</h3>
                <p class="text-center text-muted">
                  If you already have an account, please
                  <a href="login.php">Login</a>
                </p>
                <hr />

                <form action="add_user.php" method="post">
                  <div class="top-margin">
                    <label>First Name</label>
                    <input name="fname" type="text" class="form-control" />
                  </div>
                  <div class="top-margin">
                    <label>Last Name</label>
                    <input name="lname" type="text" class="form-control" />
                  </div>
                  <div class="top-margin">
                    <label
                      >Email Address <span class="text-danger">*</span></label
                    >
                    <input name="email" type="text" class="form-control" />
                  </div>

                  <div class="top-margin">
                    <label
                      >Passport No. <span class="text-danger">*</span></label
                    >
                    <input name="passport" type="text" class="form-control" />
                  </div>

                  <div class="top-margin">
                    <label>I-Card No. <span class="text-danger">*</span></label>
                    <input name="icard" type="text" class="form-control" />
                  </div>

                  <div class="row top-margin">
                    <div class="col-sm-6">
                      <label>Password <span class="text-danger">*</span></label>
                      <input name="password" type="text" class="form-control" />
                    </div>
                    <div class="col-sm-6">
                      <label
                        >Confirm Password
                        <span class="text-danger">*</span></label
                      >
                      <input
                        name="cpassword"
                        type="text"
                        class="form-control"
                      />
                    </div>
                  </div>

                  <hr />

                  <div class="row">
                    <div class="col-lg-8">
                      <label class="checkbox">
                        <input type="checkbox" />
                        I've read the
                        <a href="page_terms.html">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="col-lg-4 text-right">
                      <button class="btn btn-action" type="submit">
                        Register
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </article>
        <!-- /Article -->
      </div>
    </div>
    <!-- /container -->

    <footer id="footer" class="top-space">
      <div class="footer1">
        <div class="container">
          <div class="row">
            <div class="col-md-3 widget">
              <h3 class="widget-title">Contact</h3>
              <div class="widget-body">
                <p>
                  +601456789<br />
                  <a href="mailto:#">rose1999@graduate.utm.my</a><br />
                  <br />
                  Johor, Malaysia
                </p>
              </div>
            </div>
          </div>
          <!-- /row of widgets -->
        </div>
      </div>

      <div class="footer2">
        <div class="container">
          <div class="row">
            <div class="col-md-6 widget">
              <div class="widget-body">
                <p class="simplenav">
                  <a href="#">Home</a> | <a href="fundraise.php">Fundraise</a> |
                  <a href="donate.php">Donate</a> |
                  <b><a href="register.php">Register</a></b>
                </p>
              </div>
            </div>
          </div>
          <!-- /row of widgets -->
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
