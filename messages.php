<?php

function CheckSessionValidity(){
    if (!isset($_SESSION['is_login'])){
        header('Location: login.php');
    
    }

    if (strcmp($_SESSION['is_login'],'Login')!==0){

        echo "Session Id tidak valid";
        session_reset();
        header('Location: login.php');
    }

    else if(strcmp($_SESSION['is_login'],'Login')===0){
        //validasi IP Address and User Agent

        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        $counter = 0;

        if(strcmp($_SESSION['ip_address'], $ipaddress)===0){
            if(strcmp($_SESSION['user_agent'], $useragent)===0){
                $counter = $counter + 1;
            }
        }


        if($counter !== 3){
            session_destroy();
            echo "Invalid";
            header('Location: index.php');
        }
    }
}


?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
</head>

<body>
    <div>
        <h1>Account</h1>
        <div class="card">
            <header class="card-header">Admin</header>
            <header class="card-header">mediCare.admin@gmail.com</header>
        </div>
    </div>
    <br><br>
    <div>
        <h1>Messages</h1>
        <div class="card">
            <header class="card-header">To: Admin</header>
            <header class="card-header">Lorem Ipsum</header>
            <div class="card-content">
                <div class="inner">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iure vitae dicta rerum
                    natus, vero laudantium veritatis. Laboriosam iste unde quis alias dignissimos aliquam dolorum
                    officia suscipit. Eius, fugit tenetur.</div>
            </div>
        </div>
    </div>
</body>

</html> -->