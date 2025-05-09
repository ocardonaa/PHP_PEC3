<?php

$username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);
$username = $username != null ? trim($username) : '';

$password = filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING);
$password = $password != null ? trim($password) : '';

$my_user = $query->getUser('videogames_users', $username);

if ($my_user) {
    if (password_verify($password, $my_user->password)) {
        echo 'Successfully logged in!';
        session_start();
        $_SESSION['name'] = $my_user->username;
    }
    else {
        echo 'Wrong username or password';
    }
}

else {
    if (!($username == '' && $password == '')) {
        echo 'Wrong username or password';
    }
}

require __DIR__ .  '/../views/login.view.php';