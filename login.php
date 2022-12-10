<?php
session_start();

include("connect.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($name) && !empty($password) && !is_numeric($name)) {
    $query = "SELECT * FROM user WHERE name = '$name' limit 1";
    $result = mysqli_query($data_con, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['password'] === $password) {
          $_SESSION['id'] = $user_data['id'];
          header("Location: index.php");
          die;
        }
      }
    }
    echo "Wrong Username or Password";
  } else {
    echo "Enter Valid Information";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title>Login</title>
</head>

<body>
  <div class="container-home">

    <!-- FORM LOGIN -->
    <div class="container-login">
      <h1>Login</h1>
      <div class="login1">
        <form action="" id="subform" method="post">
          <div class="login-text">
            <input type="text" id="name" name="name" class="itext" placeholder="a">
            <label for="" class="text-label">Name</label>
          </div>

          <div class="login-text">
            <input type="password" id="password" name="password" class="itext" placeholder="a">
            <label for="" class="text-label">Password</label>
          </div>
          <br>
          <input type="submit" id="input" value="Login">
        </form>
        <br>
        <h4>Don't have an account yet? <a href="signup.php">Register</a> now !</h2>
      </div>
    </div>


    <!-- Footer -->
    <footer>
      <div class="content-ftr">
        <div class="logo-ftr">
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
        </div>
        <p>Copyright © 2022 Kelompok 6 SecProg. All Rights Reserved</p>

      </div>
    </footer>
  </div>

</body>

</html>