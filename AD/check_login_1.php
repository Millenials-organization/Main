<?php
 session_start(); 
      
require('./Table/config.php');


     
      


if (!($_SESSION["Login"] == "YES" || $_SESSION["Login"] == "NO")) {

      $myuseremail = $_POST["email"];
      $mypassword = $_POST["password"];


      $sql = "SELECT * FROM user WHERE email='$myuseremail' and password='$mypassword'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 0) {
            echo '<script>
                        alert("Invalid Username and Password!!!");
                        window.location.href="login.php";
                        </script>';
      }
      $rows = mysqli_fetch_assoc($result);

      

      $fname = $rows["fname"];
      $lname = $rows["lname"];
      $email = $rows["email"];
      $passport = $rows["passport"];
      $icard = $rows["icard"];
      $password = $rows["password"];
      $level = $rows["level"];

      $count = mysqli_num_rows($result);


      if ($count == 1) {

            $_SESSION["Login"] = "YES";
            
            $_SESSION["fname"]= $fname;
             $_SESSION["lname"] = $lname ;
             $_SESSION["email"]= $email ;
             $_SESSION["passport"] = $passport ;
            $_SESSION["icard"] = $icard;
             $_SESSION["password"] =$password ;
             $_SESSION["level"] =$level ;



            if ($_SESSION['level'] == 1) {
                  require('donate.php');
            } elseif ($_SESSION['level'] == 2) {
                  require('fundraisestaff.php');
            
            } else {
                  echo "Undefined";
            }

            // require('index.php');

      } else {

            $_SESSION["Login"] = "NO";
             header("Location: login.php");
      }
} else {

       if ($_SESSION['Login'] == "NO") {
                  require('login.php');
            } elseif ($_SESSION['level'] == 1) {
                  require('donate.php');
            } elseif ($_SESSION['level'] == 2) {
                  require('fundraisestaff.php');}
}

mysqli_close($conn);

?>