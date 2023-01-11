<?php
  $server = "127.0.0.1";
  $username = "root";
  $password = "root";
  $database = "finalproject";

  if(!$data_con = mysqli_connect($server, $username, $password, $database)){
    die("Connection Failed to Database");
  }
  