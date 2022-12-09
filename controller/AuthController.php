<?php

session_start();
require_once('./connection.php');
require_once('./SessionCreate.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // handle POST
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // user mau login
        $email = @$_POST['email'];
        $password = MD5(@$_POST['password']);

        $query = "SELECT username FROM user WHERE
            email = '$email' AND password = '$password';";

        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            var_dump($row);

            // $_SESSION['is_login'] = true;
            // $_SESSION['username'] = $row['username'];
            // $_SESSION['email'] = $row['email'];
            SessionCreate($row["username"], $email);

            
            header("Location: login.php");
            

        } else {
            var_dump("Wrong Credentials, please try again");

        }

    }
}
// if ($_SERVER['request_method'] === 'GET') {
//     // handle GET
// }
?>