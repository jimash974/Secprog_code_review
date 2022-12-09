<?php
session_start();

if (isset($_SESSION['is_login'])) {
    if ($_SESSION['is_login'] == true) {
        header('Location: messages.php');
    }
} else {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
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

</html>