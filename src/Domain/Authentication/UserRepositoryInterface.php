<?php

declare(strict_types = 1);

namespace Domain\Authentication;

use Domain\Authentication\Entity\User;

interface UserRepositoryInterface
{
    public function findAll(): array;
    public function exists(User $user): bool;
    public function findOneBy(string $email): ?User;
    public function store(User $user): bool;
}
