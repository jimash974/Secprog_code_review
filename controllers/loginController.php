<?php
session_start();

include("connect.php");
include("../functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $password = $_POST['password'];
  
  $token = $_POST['csrf_token'];
  if($token == "" || $token != $_SESSION['token']){
    header('Location: ../login.php');
    die;
  }
  
  if (!empty($name) && !empty($password) && !is_numeric($name)) {
    $query = "SELECT * FROM user WHERE Username = '$name' limit 1";
    $result = mysqli_query($data_con, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if (password_verify($password, $user_data['Password'])) {
          $_SESSION['id'] = $user_data['id'];
          header("Location: ../index.php");
          die;
        }
      }
    }
    echo "Wrong Username or Password";
  } else {
    echo "Enter Valid Information";
  }
}