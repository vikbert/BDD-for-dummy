<?php

declare(strict_types = 1);

namespace Domain\Authentication;

final class UserRegisterException extends \Exception
{
    public static function invalidEmail(string $invalidEmail): self
    {
        return new self(sprintf('Nope, invalid email : %s', $invalidEmail));
    }

    public static function invalidPassword(string $invalidPassword): self
    {
        return new self(sprintf('Nope, invalid password : %s', $invalidPassword));
    }
}