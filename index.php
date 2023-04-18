<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistema de login PHP</title>
</head>

<body>
    <?php

    if (!isset($_SESSION['login'])) {
        include('login.php');
    } else {
        include('home.php');
    }

    print("Hello world!!");
    ?>
</body>

</html>