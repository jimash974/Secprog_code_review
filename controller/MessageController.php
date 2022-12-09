<?php

session_start();
require_once('./database.php');
require_once('./create-session.php');

   
$email = @$_POST['email'];
$password = MD5(@$_POST['password']);


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    //HANDLE POST REQUEST
    echo $email.$password;
    if (isset($_POST['email']) && isset($_POST ['password'])) {
        //user ingin login
       

        $query = "SELECT username FROM user WHERE email = '$email' AND password = '$password';";

        $result = $connection->query($query);

        if ($result->num_rows > 0){
            //username or password is valid
            $row = $result->fetch_assoc();
            var_dump($row);

            SessionCreate($row["username"], $email);

            header("Location: successful.php");
        }
        else
        {
            //email or password is invalid.
            var_dump("Email / Password is invalid.");
        }

    }
}

?>