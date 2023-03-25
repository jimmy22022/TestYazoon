<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "chat";

  $conn = mysqli_connect($host, $username, $password, $database);
  if(!$conn){
    echo esc_html("Database connection error".mysqli_connect_error());
  }
?>
