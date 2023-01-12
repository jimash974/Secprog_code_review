<?php
session_start();

include("connect.php");
include("../functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  // $name = $_POST['email'];
  $password = $_POST['password'];
  
  $token = $_POST['csrf_token'];
  if($token == "" || !hash_equals($_SESSION['token'], $token)){
    header('Location: ../login.php');
    die;
  }
  
  if (!empty($name) && !empty($password) && !is_numeric($name)) {
    $stmt = mysqli_prepare($data_con, "SELECT * FROM user WHERE Username = ? limit 1");
    mysqli_stmt_bind_param($stmt, 's', $name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
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