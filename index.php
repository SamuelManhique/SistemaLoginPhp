<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistema de login PHP</title>
</head>

<body>
    <?php

    if (!isset($_SESSION['login'])) {

        if (isset($_POST['accao'])) {
            $login = 'samuel';
            $senha = '1234';

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if ($login == $loginForm && $senha == $senhaForm) {
                //logado com sucesso
                $_SESSION['login'] = $login;
                header('Location: index.php');
            } else {
                //Alguem erro ocorreu
                echo 'Dados Invalidos.';
            }
        }
        include('login.php');
    } else {
        include('home.php');
    }
    ?>
</body>

</html>