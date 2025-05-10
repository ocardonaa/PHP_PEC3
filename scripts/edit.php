<?php

require 'functions/password_scripts.php';
require 'functions/sanitize_input.php';

if (isset($_COOKIE[session_name()])) {

    $username = $_SESSION['name'];

    $old_user = $query->getUser('videogames_users', $username);

    $password = sanitize($password, 'password');

    $password2 = sanitize($password2, 'password2');

    $name = sanitize($name, 'name');

    $surname = sanitize($surname, 'surname');

    if (!($name == '' && $surname == '' && $password2 == '' && $password == '')) {

        if ($name != '') {
            $query->updateUser('videogames_users', 'name', $name, $old_user->name, 'username', $username);
        }

        if ($surname != '') {
            $query->updateUser('videogames_users', 'surname', $surname, $old_user->surname, 'username', $username);
        }

        if($password != '' || $password2 != '') {
            if(correct_size($password) && correct_size($password2) && check_equal_passwords($password, $password2)) {
                $query->updateUser('videogames_users', 'password', encrypt_password($password), $old_user->password, 'username', $username);
            }
        }

        header('Location: profile');
        exit;
    }


    require __DIR__ .  '/../views/edit.view.php';
}

else {
    echo 'You need to <a href="login">login</a>';
}