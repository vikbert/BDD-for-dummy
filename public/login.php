<?php

declare(strict_types = 1);

use Domain\Authentication\Entity\User;
use Infrastructure\Repository\FileStorageUserRepository;

require_once __DIR__ . '/../vendor/autoload.php';

$emailInput = $_POST['email'];
$passwordInput = $_POST['password'];

$user = User::fromFormData($emailInput, $passwordInput);

$userRepository = new FileStorageUserRepository();
