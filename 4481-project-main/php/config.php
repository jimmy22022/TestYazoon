<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "chat";

  $conn = mysqli_connect($host, $username, $password, $database);
  if(!$conn){
    echo mysqli_real_escape_string("Database connection error".mysqli_connect_error());
  }
?>
