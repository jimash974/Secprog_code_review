<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "finalproject";

  if(!$data_con = mysqli_connect($server, $username, $password, $database)){
    die("Connection Failed to Database");
  }
  