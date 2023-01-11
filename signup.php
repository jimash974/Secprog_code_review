<?php
    session_start();
    include("./utils/csrf.php");
    $token = generateCsrfToken();
    $_SESSION['token'] = $token;
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

    <link rel="stylesheet" href="signUp.css">
</head>

<body>
        <!-- FORM REGIST -->
        <div class="container-regist">
            <h1>Register</h1>
            <div class="login1">
                <form id="subform" action="./controllers/signUpController.php" method="POST">
                    <div class="login-text">
                        <input type="text" class="itext" id="name" name="name" placeholder="a">
                        <!-- <span></span> -->
                        <label for="" class="text-label">Username</label>
                        <?php
                            if(isset($_SESSION['error'])){
                        ?>
                            <p class="error"><?= $_SESSION['error']; ?></p>
                        <?php
                            }
                            unset($_SESSION["error"]);

                        ?> 
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

                    <div class="login-text flex">
                        <label for="" class="text-label">Gender</label>
                        <div class="gender">
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="login-text">
                        <input type="hidden" id="csrf_token" name="csrf_token" class="itext" placeholder="a" value="<?= $_SESSION['token'];?>">
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