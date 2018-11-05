<?php

declare(strict_types = 1);

namespace Domain\Authentication\Entity;

use Domain\Authentication\UserRegisterException;

final class User
{
    private $email;
    private $passwordHash;

    private function __construct(string $email, string $passwordHash)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw UserRegisterException::invalidEmail($email);
        }

        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }

    /**
     * @throws UserRegisterException
     */
    public static function fromUserData(string $email, string $passwordHash): self
    {
        return new self($email, $passwordHash);
    }

    public static function fromFormData(string $emailInput, string $passwordInput): self
    {
        $passwordHash = password_hash($passwordInput, PASSWORD_DEFAULT);
        if (strlen($passwordInput) <= 3 || false === $passwordHash) {
            throw new UserRegisterException('Nope, invalid password');
        }

        return new self($emailInput, $passwordHash);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }
}
