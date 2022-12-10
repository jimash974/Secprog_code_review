<?php
    session_start();

    include("connect.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($name) && !empty($password) && !is_numeric($name)){
            $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($data_con, $query);
            header("Location: login.php");
            die;
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Register</title>
</head>

<body>
        <!-- FORM REGIST -->
        <div class="container-regist">
            <h1>Register</h1>
            <div class="login1">
                <form id="subform" action="" method="POST">
                    <div class="login-text">
                        <input type="text" class="itext" id="name" name="name" placeholder="a">
                        <!-- <span></span> -->
                        <label for="" class="text-label">Full Name</label>
                    </div>
                    <div class="login-text">
                        <input type="text" class="itext" id="email" name="email" placeholder="a">
                        <!-- <span></span> -->
                        <label for="" class="text-label">Email</label>
                    </div>

                    <div class="login-text">
                        <input type="password" class="itext" id="password" name="password" placeholder="a">
                        <label for="" class="text-label">Password</label>
                    </div>
                    <input type="submit" id="input" name="register" value="Register">
                </form>
                <h4>Have an account? <a href="login.php">Login</a>
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
                <p>Copyright © 2022 Kelompok 6 SecProg. All Rights Reserved </p>
            </div>
        </footer>
    </div>
</body>

</html>