<?php
    session_start();
    
    if (isset($_SESSION['is_login'])) {
        if ($_SESSION['is_login'] == true) {
            header('Location: messages.php');
        }
    }
    else {
        header('Location: login.php');
    }
?>