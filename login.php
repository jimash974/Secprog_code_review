<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title>MediCare</title>
</head>

<body>

  <body>
    <!-- Navbar -->
    <div class="container-home">
      <header>
        <div class="cntr">
          <div class="logo">
            <img src="../assets/icon.png" alt="">
          </div>
          <div class="navigation">
            <nav class="navbar">
              <ul class="menu-navbar">
                <li class="item-navbar">
                  <div class="dropdown">
                    <button class="button-drop">Products</button>
                    <div class="konten-dropdown">
                      <a href="products.html">Healthcare</a>
                      <a href="#">Cosmetic</a>
                      <a href="#">Misc.</a>
                    </div>
                  </div>
                </li>
                <li class="item-navbar"><a href="aboutus.html" class="test">About Us</a></li>
                <li class="item-navbar"><a href="register.html" class="test">Register</a></li>
                <li class="item-navbar"><button class="nav-login"><a href="#" class="tx-login">Login</a></button></li>
              </ul>
              <div class="hamburger">&#9776;</div>
            </nav>
          </div>
        </div>
      </header>

      <!-- FORM LOGIN -->
      <div class="container-login">
        <h1>Login</h1>
        <div class="login1">
          <form action="" id="subform">
            <div class="login-text">
              <input type="text" id="email" class="itext" placeholder="a">
              <label for="" class="text-label">Email</label>
            </div>

            <div class="login-text">
              <input type="password" id="password" class="itext" placeholder="a">
              <label for="" class="text-label">Password</label>
            </div>
            <br>
            <input type="submit" id="input" value="Login">
          </form>
          <br>
          <h4>Don't have an account yet? <a href="register.html">Register</a> now !</h2>
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
          <p>Copyright © 2022 William Josan. All Rights Reserved</p>
        </div>
      </footer>
    </div>
  </body>
  <script src="../js/rspv.js"></script>
  <script src="../js/login.js"></script>
</body>

</html>