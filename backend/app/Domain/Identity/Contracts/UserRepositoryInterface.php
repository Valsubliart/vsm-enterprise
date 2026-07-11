<?php

namespace App\Domain\Identity\Contracts;

use App\Domain\Identity\Entities\User;

interface UserRepositoryInterface
{
    public function save(User $user): void;

    public function findByEmail(
        string $email
    ): ?User;
}
