<?php

require ("config.php");


$sql = "INSERT INTO user (fname, lname, email, passport, icard, password , level)
VALUES ('Emma', 'Haso', 'emmahaso@gmail.com', 'QE1241422', '254332211', 'Emma', 2 );";
$sql .= "INSERT INTO user (fname, lname, email, passport, icard, password , level)
VALUES ('Adam', 'Rit', 'adamrit@gmail.com', 'AE1231422', '533132211', 'Adam', 1 );";
$sql .= "INSERT INTO user (fname, lname, email, passport, icard, password , level)
 VALUES ('Hamza', 'Doman', 'hamzadoman@gmail.com', 'WY1231332', '533124523', 'Hamza', 2 );";




if (mysqli_multi_query($conn, $sql)) {
  // echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
