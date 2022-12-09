<?php
    session_start();
    require_once('./connection.php');
    if($_SERVER['request_method'] === 'POST'){
        // handle POST
        if(isset($_POST['uesrname']) && isset($_POST['password'])) {
            // user mau login
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM users WHERE
            username = '$username' AND password = '$password';";

            $result = $connection -> query($query);
            if ($result -> num_rows > 0){
                $row = $result -> fetch_assoc();

                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];



                var_dump($row);

            } else {
                var_dump("Wrong Credentials, please try again");

            }

        }
    }
    if($_SERVER['request_method'] === 'GET'){
        // handle GET
    }
?>