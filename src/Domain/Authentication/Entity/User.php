<?php

declare(strict_types = 1);

namespace Domain\Authentication\Entity;

use Domain\Authentication\UserRegisterException;

final class User
{
    private $email;
    private $password;

    private function __construct(string $email, string $password)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw UserRegisterException::invalidEmail($email);
        }

        if (strlen($password) <= 3) {
            throw UserRegisterException::invalidPassword($password);
        }

        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @throws UserRegisterException
     */
    public static function fromFormData(string $email, string $password): self
    {
        return new self($email, $password);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
