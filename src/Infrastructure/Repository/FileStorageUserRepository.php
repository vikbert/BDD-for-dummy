<?php

declare(strict_types = 1);

namespace Infrastructure\Repository;

use Domain\Authentication\Entity\User;
use Domain\Authentication\UserRepositoryInterface;

final class FileStorageUserRepository implements UserRepositoryInterface
{
    private const USER_FILE_PATH = __DIR__ . '/../../../data/users.json';
    private $userCache = null;

    public function findAll(): array
    {
        if (null !== $this->userCache) {
            return $this->userCache;
        }

        return json_decode(file_get_contents(self::USER_FILE_PATH), true);
    }

    public function exists(User $user): bool
    {
        return array_key_exists($user->getEmail(), self::findAll());
    }

    public function store(User $user): bool
    {
        $userData = self::findAll();
        $userData[$user->getEmail()] = $user->getPassword();

        return null !== file_put_contents(self::USER_FILE_PATH, json_encode($userData));
    }
}