<?php

require 'functions/sanitize_input.php';

if (!isset($_COOKIE[session_name()])) {

    $username = sanitize($username, 'username');

    $password = sanitize($password, 'password');

    $my_user = $query->getUser('videogames_users', $username);

    if ($my_user) {
        if (!($username == '' && $password == '')) {
            if (password_verify($password, $my_user->password)) {
                echo 'Successfully logged in!';
                session_start();
                $_SESSION['name'] = $my_user->username;
                header("Location: /");
                exit();
            }
            else {
                echo 'Wrong username or password';
            }
        }
    }

    else {
        if (!($username == '' && $password == '')) {
            echo 'Wrong username or password';
        }
    }

    require __DIR__ .  '/../views/login.view.php';
}

else {
    header("Location: /");
    exit();
}

