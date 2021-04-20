<?php
  $con = mysqli_connect('localhost', 'root', '','bankdb');

  if(!$con) {
    die("Could not connect to db.".mysqli_connect_error());
  }
?>