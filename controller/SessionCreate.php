<?php

function SessionCreate($username, $email){
    $_SESSION['is_login'] = "Login";
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

}

?>