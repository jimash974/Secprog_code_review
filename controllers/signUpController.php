<?php
    session_start();

    include("connect.php");
    include("../functions.php");

    if($_SERVER['REQUEST_METHOD'] === "POST"){    
        var_dump(isset($_POST['password']));
        var_dump($_POST['password']);


        if (isset($_POST['name']) && isset($_POST['password'])) {
            var_dump(isset($_POST['password']));
            var_dump($_POST['password']);
            $name = $_POST['name'];

            if(strlen($name) > 20){
                $_SESSION['error'] = "Username is too long, max = 20";
                echo $name;
                // header("Location: signUp.php");
                // die;
            }

            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $gender = $_POST['gender'];

            $token = $_POST['csrf_token'];
            if($token == "" || $token != $_SESSION['token']){
              header('Location: ../signup.php');
              die;
            }
    
            if(!empty($name) && !empty($password) && !is_numeric($name)){
                $query = "INSERT INTO user (username, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
                mysqli_query($data_con, $query);
                header("Location: ../login.php");
                die;
            } else {
                echo "Enter Valid Information";
                $_SESSION['error'] = "Data is not completed";
                die;
            }
        } else{
            header('Location: ../signup.php');
            die;
        }
    }else{
        header('Location: ../signup.php');
        die;
    }
?>