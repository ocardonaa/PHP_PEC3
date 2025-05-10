<?php

function sanitize($value, $name_field) {
    $value = filter_input(INPUT_GET, $name_field, FILTER_SANITIZE_STRING);
    $value = $value != null ? trim($value) : '';
    return $value;
}