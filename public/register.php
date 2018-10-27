<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

$userFilePath = __DIR__ . '/../data/users.json';
$users = json_decode(file_get_contents($userFilePath), true);

$emailInput = $_POST['email'];
$passwordInput = $_POST['password'];

var_dump($emailInput, $passwordInput);

echo 'Registration done';
