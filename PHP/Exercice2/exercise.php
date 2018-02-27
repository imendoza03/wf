<?php
$password = 'azertyqwerty';
$salt = 'salt';

$passwordFirstPartLength = floor(strlen($password)/2);
$passwordSecondPartLength = ceil(strlen($password)/2);

$saltedPassword = substr($password, 0, $passwordFirstPartLength) . $salt . substr($password, $passwordFirstPartLength, $passwordSecondPartLength);
