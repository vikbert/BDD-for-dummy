<?php

declare(strict_types = 1);

namespace Domain\Authentication\Entity;

final class User
{
    private $email;
    private $password;

    private function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

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
