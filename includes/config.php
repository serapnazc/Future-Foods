<?php

  $servername = "localhost";
  $username = "futurefo_user";
  $password = "*(~PCeR%k$~F";
  $db = "futurefo_future_foods";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$db);
  $conn->set_charset("utf8");
  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
//  echo "Connected successfully";

?>
