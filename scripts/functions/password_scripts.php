<?php

function correct_size($passw) {
    if (strlen($passw) >= 8 && strlen($pass) <= 255) {
        return true;
    }
    else {
        return false;
    }
}

function check_equal_passwords($p1, $p2) {
    return $p1 == $p2;
}

function encrypt_password($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}