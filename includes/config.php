<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "future-foods";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$db);
  $conn->set_charset("utf8");
  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
//  echo "Connected successfully";

?>
