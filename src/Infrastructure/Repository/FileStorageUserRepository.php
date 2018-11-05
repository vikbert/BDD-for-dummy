<?php

declare(strict_types = 1);

namespace Infrastructure\Repository;

use Domain\Authentication\Entity\User;
use Domain\Authentication\UserRepositoryInterface;

final class FileStorageUserRepository implements UserRepositoryInterface
{
    private const USER_FILE_PATH = __DIR__ . '/../../../data/users.json';

    private $userCache = null;
    private $filePath;

    public function __construct(string $filePath = null)
    {
        $this->filePath = $filePath?? self::USER_FILE_PATH;
    }

    public function findAll(): array
    {
        if (null !== $this->userCache) {
            return $this->userCache;
        }

        $userDataJson = (string) file_get_contents(self::USER_FILE_PATH);
        if ('' === $userDataJson) {
            return [];
        }

        return json_decode($userDataJson, true);
    }

    public function exists(User $user): bool
    {
        return array_key_exists($user->getEmail(), self::findAll());
    }

    public function findOneBy(string $email): ?User
    {
        $userData = self::findAll();
        if (array_key_exists($email, $userData)) {
            return User::fromUserData($email, $userData[$email]);
        }

        return null;
    }

    public function store(User $user): bool
    {
        $userData = self::findAll();
        $userData[$user->getEmail()] = $user->getPasswordHash();

        $userDataJson = (string) json_encode($userData);
        if ('' === $userDataJson) {
            return false;
        }

        return null !== file_put_contents(self::USER_FILE_PATH, $userDataJson);
    }
}
