<?php
    session_start();
    require_once('./controllers/connect.php');
    require_once('./functions.php');
    check_login($data_con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Welcome</h1>
    <a href="./session_erased.php">
        <button>
            Log Out
        </button>
    </a>
</body>
</html>