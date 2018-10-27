<?php

declare(strict_types = 1);

use Domain\Authentication\Entity\User;
use Infrastructure\Repository\FileStorageUserRepository;

require_once __DIR__ . '/../vendor/autoload.php';


$emailInput = $_POST['email'];
$passwordInput = $_POST['password'];
$user = User::fromFormData($emailInput, $passwordInput);

$userRepository = new FileStorageUserRepository();
if ($userRepository->exists($user)) {
    echo 'Nope';
}

$stored = $userRepository->store($user);
if ($stored) {
    echo 'Ok';

    return;
}

throw new Exception('Can not store the new user in repository');


