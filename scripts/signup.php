<?php

require 'functions/password_scripts.php';
require 'functions/sanitize_input.php';


$username = sanitize($username, 'username');

$password = sanitize($password, 'password');

$password2 = sanitize($password2, 'password2');

$name = sanitize($name, 'name');

$surname = sanitize($surname, 'surname');

$my_user = $query->getUser('videogames_users', $username);

$errors_array = [];

if (!($username == '' && $name == '' && $surname == '' && $password2 == '' && $password == '')) {
    if($username == '' || $name == '' || $surname == '' || $password2 == '' || $password == '') {
        array_push($errors_array, 'All fields are required');
    }
    if(!correct_size($password) || !correct_size($password2)) {
        array_push($errors_array, 'Password must be between 8 to 255 characters long');
    }
    if(!check_equal_passwords($password, $password2)) {
        array_push($errors_array, 'Passwords must be equal');
    }
    if($my_user) {
        array_push($errors_array, 'User already exists');
    }
    if (count($errors_array) > 0) {
        foreach ($errors_array as $error) {
            echo $error . '<br>';
        }
    }
    else {
        echo 'Register sucessful';
        $query->createUser('videogames_users', $username, encrypt_password($password), $name, $surname);
        header('Location: /');
        exit;
    }
}

require __DIR__ .  '/../views/signup.view.php';