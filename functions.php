<?php

$pw_length = $_GET['pw_length'];

function getPassword(int $length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-}{[}]\|;:<>?/';

    $password = '';

    for ($i = 0; $i < $length; $i++) {

        $password = substr(str_shuffle($chars), 0, $length);
    };

    return $password;
}
