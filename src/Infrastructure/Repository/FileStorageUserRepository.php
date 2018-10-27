<?php

declare(strict_types = 1);

namespace Infrastructure\Repository;

use Domain\Authentication\Entity\User;
use Domain\Authentication\UserRepositoryInterface;
use Webmozart\Assert\Assert;

final class FileStorageUserRepository implements UserRepositoryInterface
{
    private const USER_FILE_PATH = __DIR__ . '/../../../data/users.json';
    private $userCache = null;

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

    public function store(User $user): bool
    {
        $userData = self::findAll();
        $userData[$user->getEmail()] = $user->getPassword();

        $userDataJson = (string) json_encode($userData);
        if ('' === $userDataJson) {
            return false;
        }

        return null !== file_put_contents(self::USER_FILE_PATH, $userDataJson);
    }
}